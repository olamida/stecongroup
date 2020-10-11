<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    //
    protected $table = 'tags';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
    ];
}
