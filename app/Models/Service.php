<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';
            
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //name, slug, user_id, description, featured, featured_image
    protected $fillable = [
        'name',
        'description',
    ];
}
