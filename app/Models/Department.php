<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments';
            
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //user_id, title, code, description, picture
    protected $fillable = [
        'user_id',
        'name',
        'code',
        'description',
        'picture',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function employee()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
