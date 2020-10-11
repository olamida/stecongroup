<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Auth;

use App\Models\Auth\Role;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;

class PostController1 extends Controller
{
    
    //
    /**

    'category_id', 'title', 'slug', 'description',
    'content', 'status', 'post_views', 'comments', 'featured',
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        //return view('backend.post.index');
        //$Posts = Post::all();
        //return view('backend.post.index', compact('Posts'));

        $posts = Post::all();
        return view('backEnd.post.index', ['posts' => $posts]);
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
        return view('backend.post.create');
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

        dd($request);

        $created = Auth::user()->id;
        $data = $request->all();
        
        //$created = Auth::id();     $user->id; 
        $data['created'] = $created;

        PostCategory::create($data);
        return redirect()->route('admin.category.index')->withFlashSuccess(__('alerts.backend.post_category.created'));

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
        print "I'm show";
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
        print "I'm show";
    }

        //return view('backend.postcategory.edit')->with($id);
        return view('backend.post.edit', ['posts' => Post::findOrFail($id)]);
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
        if ($this->validator($request)->fails()) {
            return redirect()->back()
                        ->withErrors($this->validator($request))
                        ->withInput();
        }

        

        // True because $a is set
        if (empty($request->featured)) {
          $request['featured'] = 0;
        }
        
        //dd($request);

        //$data = $request->all();
        //$data['created'] = $created;

        $posts = Post::findOrFail($id);
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

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.posts.deleted'));
    }
}
