<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    //
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'positions';
            
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    ////user_id, title, code, grade, details
    protected $fillable = [
        'user_id',
        'title',
        'code',
        'grade',
        'details',
    ];

    /**
     * The positions that belong to the employee.
     */
    public function employee()
    {
        return $this->belongsToMany('App\Models\Employee');
    }
}
