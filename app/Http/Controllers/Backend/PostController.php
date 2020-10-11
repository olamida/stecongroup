<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Purifier;
use Image;
use Storage;

use Validator;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use App\Models\Auth\Role;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;

class PostController extends Controller
{

    protected function validator(Request $request)
    {
        // boolean attribute: |bool
        //'title', 'description', 'slug', 'content', image
        return Validator::make($request->all(), [
            'title' => 'required|max:250|min:5|string',
            //'slug' => 'required|alpha_dash|min:5|max:250|unique:posts',
            'description' => 'required|max:250|min:10|string',
            'content' => 'required',
            //'status' => 'in:draft,publish,unpublish',
            'image' => 'sometimes|image:jpeg,bmp,png,gif',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$posts = post::all();
        //dd($posts);
        //return view('backend.post.index', ['posts' => $posts]);
        return view('backend.post.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //print('I am create');
        //$category = Category::pluck('name', 'id');
        //return view('backend.post.create');
        return view('backend.post.create', ['category' => Category::pluck('name', 'id'), 'tag' => Tag::pluck('title', 'id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($this->validator($request)->fails()) {
            return redirect()->back()
                        ->withErrors($this->validator($request))
                        ->withInput();
        }



        /*
        $detail=$request->content;

        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name = time().$k.'.png';
            $path = public_path() .'/img/blog/'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }

        $detail = $dom->savehtml();
        
        
        $summernote = new Summernote;
        $summernote->content = $detail;
        $summernote->save();
        return view('summernote_display',compact('summernote'));
        
        //'user_id', 'title', 'description', 'slug', 'content', image

        $post = new Post;

        $post->title = $request->title;
        $post->user_id = $authur;
        $post->content = Purifier::clean($request->content);
        $post->description = $request->title;
        $post->image = $request->title;

        $post->save();

        $post->tags()->sync($request->tags, false);
        */


        $authur = Auth::user()->id;
        $data = $request->all();
        
        //$created = Auth::id();     $user->id; 
        //$data['content'] = $detail;
        $data['content'] = Purifier::clean($request->content);
        $data['user_id'] = $authur;

        //save our image
        //dd($request);
        if ($request->hasFile('featured_image'))
        {
           //$path = $request->file('featured_image')->store('img/blog'); 
           $path = Storage::putFile('public/img', $request->file('featured_image'));
           //dd($path);
           //get url from storage
           $url    = Storage::url($path);
           //dd($url);
           $data['featured_image'] = $url;
        }

        Post::create($data);

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.posts.created'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$comment = Post::find(1)->comments()->where('approval', true)->first();
        //dd($comment);
        return view('backend.post.show', ['posts' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //return view('backend.postcategory.edit')->with($id);
        $category = Category::pluck('name', 'id');
        return view('backend.post.edit', ['posts' => Post::findOrFail($id), 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        /*
        if($request->input('slug')== $post->slug)
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:250|min:5|string',
                'description' => 'required|max:250|min:10|string',
                'content' => 'required',
                'status' => 'required|max:110|min:2|string',
                'image' => 'image:jpeg,bmp,png,gif',
            ]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:250|min:5|string',
                'slug' => 'required|alpha_dash|min:3|max:250|unique:posts',
                'description' => 'required|max:250|min:10|string',
                'content' => 'required',
                'status' => 'required|max:110|min:2|string',
                'image' => 'image:jpeg,bmp,png,gif',
            ]);
        }
        */

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        
        $posts = Post::findOrFail($id);

        // If featured is not available in the $request, set it to 0
        if (empty($request->featured)) {
          $request['featured'] = $posts->featured;
        }
        
        //dd($request);

        //$data = $request->all();
        //$data['created'] = $created;
        
        $posts->update($request->all());

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.posts.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //print "I'm destroy";
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.posts.deleted'));
    }
}
