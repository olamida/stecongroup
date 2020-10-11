<?php

namespace App\Http\Controllers\Backend;

use Validator;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Auth\Role;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;

class PostCategoryController extends Controller
{

	protected function validator(Request $request)
    {
        //'title', 'description', 'organisation', 'code'
        return Validator::make($request->all(), [
            'name' => 'required|max:110|min:2|string',
            'description' => 'required|max:250|min:5|string',
            'image' => 'image:jpeg,bmp,png,gif',
            'slug'          => 'required|min:3|max:255|unique:posts_categories',
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
    	print "I'm index";
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        //return view('backend.post.index');
        //$Posts = Post::all();
        //return view('backend.post.index', compact('Posts'));
        //*
        $categories = PostCategory::all();
        return view('backEnd.postcategory.index', ['categories' => $categories]);
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
        return view('backEnd.postcategory.create');
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

        $created = Auth::user()->id;
        $data = $request->all();
        
        //$created = Auth::id();	 $user->id;	
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

        //return view('backend.postcategory.edit')->with($id);
        return view('backend.postcategory.edit', ['categories' => PostCategory::findOrFail($id)]);
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

        $category = PostCategory::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin.category.index')->withFlashSuccess(__('alerts.backend.post_category.updated'));
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
        print "I'm destroy";

        return redirect()->route('admin.auth.role.index')->withFlashSuccess(__('alerts.backend.roles.deleted'));
    }
}
