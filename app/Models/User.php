<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class User extends Model
{  
    public function Favorite()
    {
        return $this->hasMany('App\Models\Favorite');
    }
    protected $primaryKey = "username";
    protected $autoIncrement = false;
    protected $keyType = "string";
    
  
}

