<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    //
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * user_id, title, slug, description, content, status, comments, featured
     * @var array
     */
    //user_id, department_id, gender, doj, dol, details
    protected $fillable = [
        'user_id',
        'department_id',
        'gender',
        'doj',
        'dol',
        'details',
    ];

    /**
     * The departments that belong to the employee.
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    /**
     * The positions that belong to the employee.
     */
    public function position()
    {
        return $this->belongsToMany('App\Models\Position');
    }

    /**
     * Get the user that owns the employment.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }
    
}


