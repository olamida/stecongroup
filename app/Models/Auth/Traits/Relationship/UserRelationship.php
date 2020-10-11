<?php

namespace App\Models\Auth\Traits\Relationship;

use App\Models\Auth\PasswordHistory;
use App\Models\Auth\SocialAccount;

/**
 * Class UserRelationship.
 */
trait UserRelationship
{
    /**
     * @return mixed
     */
    public function providers()
    {
        return $this->hasMany(SocialAccount::class);
    }

    /**
     * @return mixed
     */
    public function passwordHistories()
    {
        return $this->hasMany(PasswordHistory::class);
    }

    /**
     * Get the post record associated with the user.
     */
    public function post()
    {
        return $this->hasOne('App\Models\Post');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function comment()
    {
        return $this->hasOne('App\Models\Comment');
    }

    /**
     * Get the employee record associated with the user.
     */
    public function phone()
    {
        return $this->hasOne('App\Models\employee');
    }
    
}