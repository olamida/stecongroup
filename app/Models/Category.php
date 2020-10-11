<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    //
    use SoftDeletes;
    use HasSlug;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
            
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //name, slug, user_id, description, featured, featured_image
    protected $fillable = [
        'user_id',
        'name',
        //'slug',
        'description',
        'featured_image',
        'featured',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
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
