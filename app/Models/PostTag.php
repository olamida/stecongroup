<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model 
{

    protected $table = 'post_tag';
    public $timestamps = false;

    public function tag_fk()
    {
        return $this->hasMany('Tag');
    }

    public function post_fk()
    {
        return $this->hasMany('Post');
    }

}