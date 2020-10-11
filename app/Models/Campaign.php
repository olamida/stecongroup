<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    //
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'campaigns';
            
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //user_id, web_id, campaign_id, subject, status, content, emails_sent, sent_time
    protected $fillable = [
        'user_id',
        'campaign_id',
        'web_id',
        'subject',
        'status',
        'content',
        'emails_sent',
        'sent_time',
    ];
}
