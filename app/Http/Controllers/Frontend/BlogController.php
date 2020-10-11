<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class BlogController extends Controller
{
    //
    /**
     * @return \Illuminate\View\View
     */
    public function indexBlog()
    {
        return view('frontend.blog.blog');
        //return 'I am all-Post for Blog Index';
    }

    /**
     * Display the Blog Post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBlog($slug)
    {
        $post = Blog::where('slug', '=', $slug)->first();
        //$posts = Post::find($id);
        //return $post->slug;
        //dd($post);
        return view('frontend.blog.blog-single', ['posts' => $post]);
    }

    public function indexCategory()
    {
        //return view('frontend.index');
        //return 'I am all-Post category';
        $categories = Category::all();
        return view('frontend.blog.category', ['categories' => $categories]);
    }

    public function categoryBlogList()
    {
        //return view('frontend.index');
        //return 'I am all-Post category';
        $categories = Category::all();
        return view('frontend.blog.category', ['categories' => $categories]);
    }


    /**
     * Display the list of posts in a category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryBlog($id)
    {
        $posts = Category::find($id)->post;
        //return 'I am all-Post in a category';
        return view('frontend.blog.category-posts', ['posts' => $posts]);
    }


    /**
     * Display the list of posts in a category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Request $request, $post_id)
    {
        //validate
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $comment = new Comment();

        $author = Auth::user()->id;

        $comment->body = $request->body;
        //$comment->approved = true;
        $comment->user_id = $author;
        //$comment->post_id = $post_id;
        //$comment->post->associate($post);

        //$comment->save();
        $post = Post::find($post_id);
        $post->comment()->save($comment);

        
        return redirect()->route('admin.post.show', ['post' => $post_id, 'posts' => Post::findOrFail($post_id)] )->withFlashSuccess(__('alerts.backend.posts.created'));

    }

}
