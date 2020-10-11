<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    //
    use SoftDeletes;

    protected $table = 'customers';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'fname', 'lname', 'dob', 'email', 'phone', 'phone_confirm',
        'avatar_type',
        'avatar_location',
        'type',
    ];

}
