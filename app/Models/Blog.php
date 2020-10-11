<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';


        /**
     * Get the comments for the blog post.
      * Eloquent will assume the foreign key on the Comment model is post_id
     * Access them: $comments = App\Post::find(1)->comments; 
     * $comment = App\Post::find(1)->comments()->where('title', 'foo')->first();
     */

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }



    /**
     * The categories that belong to the user.
     */
    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }


    /**
     * Get the user that owns the Post.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }


    /**
     *  -> Inside the comment Model
     * define a relationship to allow a comment to access its parent post
     * Get the post that owns the comment.
     *  public function post()
     *  {
     *      return $this->belongsTo('App\Post');
     *  }            
     *  $comment = App\Comment::find(1);
     *  echo $comment->post->title;
     */

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
