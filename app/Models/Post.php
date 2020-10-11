<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    //
    use SoftDeletes;
    use HasSlug;

    /**
     * The attributes that are mass assignable.
     * user_id, title, slug, description, content, status, comments, featured
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        //'slug',
        'description',
        'category_id',
        'content',
        'status',
        'comments',
        'featured',
        'featured_image',
    ];


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


}
