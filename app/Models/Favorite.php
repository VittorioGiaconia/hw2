<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }
    protected $autoIncrement = false;
    protected $keyType = "string";

  
}