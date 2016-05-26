<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable=[
        'name',
        'email',
        'password',
        'status',
        'BOD',
        'address',
        'mobile',
        'fb',
        'twiter',
        'instagram',
        'google',
        'youtube',
        'profile_pic',
    ];
}
