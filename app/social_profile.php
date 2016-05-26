<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_profile extends Model
{
    protected $fillable=[
        'name',
        'fb',
        'twiter',
        'instagram',
        'google',
        'youtube',
    ];

}
