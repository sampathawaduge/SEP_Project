<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public $timestamps = false;
    protected $fillable = array('title','image');
}
