<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    //
    protected $table = 'comments';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //user_id, post_id, reply_id, body, approval, ip, user_agent, 
    protected $fillable = [
        'user_id',
        'post_id',
        'reply_id',
        'body',
        'approval',
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    /*
    public function user_fk()
    {
        return $this->hasOne('User');
    }

    
    public function post_fk()
    {
        return $this->hasOne('Post');
    }
    */

    
}
