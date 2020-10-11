<?php

namespace App\Http\Controllers\Backend;

use Validator;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Image;
use Storage;
//use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Auth\Role;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;

class CategoryController extends Controller
{

    protected function validator(Request $request)
    {
        //'name', 'description', 'image', 'slug'
        return Validator::make($request->all(), [
            'name' => 'required|max:110|min:2|string',
            'description' => 'required|max:250|min:5|string',
            'image' => 'image:jpeg,bmp,png,gif',
            //'slug'          => 'required|alpha_dash|min:3|max:255|unique:categories',
        ]);
    }

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print "I'm index";
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        //return view('backend.post.index');
        //$Posts = Post::all();
        //return view('backend.post.index', compact('Posts'));

        //$post = Post::orderBy('id', 'desc')->paginate(10);

        //$posts = Post::orderBy('', '')->paginate(10);
        //return view('posts.index')->withPosts($posts);
        //*
        $categories = Category::all();
        return view('backEnd.category.index', ['categories' => $categories]);
        //*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //print "I'm create";
        return view('backEnd.category.create');
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


        //dd($request);
        //name, slug, user_id, description, featured, featured_image
        //$data = new Category;
        //$created = Auth::user()->id;

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['name'] = $request->name;
        //$data['slug'] = $request->slug;
        $data['description'] = $request->description;
        // Set create and initialize featured if not set from request
        if(empty($request->featured)) {
          $request['featured'] = 0;
        }
        else
        {
            $data['featured'] = $request->featured;
        }
        
        //$created = Auth::id();     $user->id; 

        /*
        if ($request->hasFile('featured_image'))
        {
            $image = $request->file('featured_image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            //$location = public_path('img/blog/', $filename);
            $location = ('public/img/blog/'.$filename);
            //dd($location);
            

            //Image::make($image)->resize(800, 400)->save($location);
            //$data->featured_image = $filename;
        }
        */

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
        

        Category::create($data);
        return redirect()->route('admin.category.index')->withFlashSuccess(__('alerts.backend.categories.created'));

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
        //print "I'm show";

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
        return view('backend.category.edit', ['categories' => Category::findOrFail($id)]);
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
        if($request->input('slug')== $category->slug)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:110|min:2|string',
                'description' => 'required|max:250|min:5|string',
                'image' => 'image:jpeg,bmp,png,gif',
            ]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:110|min:2|string',
                'description' => 'required|max:250|min:5|string',
                'image' => 'image:jpeg,bmp,png,gif',
                'slug'          => 'required|alpha_dash|min:3|max:255|unique:categories',
            ]);
        }
        */

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        
        $category = Category::findOrFail($id);

        // Set create and initialize featured if not set from request
        if (empty($request->featured)) {
          $request['featured'] = $category->featured;
        }
        
        //dd($request);

        //$data = $request->all();
        //$data['created'] = $created;

        
        $category->update($request->all());

        return redirect()->route('admin.category.index')->withFlashSuccess(__('alerts.backend.categories.updated'));
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
        $category = Post::find($id);
        $category->delete();

        return redirect()->route('admin.category.index')->withFlashSuccess(__('alerts.backend.categories.deleted'));
    }
}
