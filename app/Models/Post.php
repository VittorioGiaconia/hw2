<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Favorite()
    {
        return $this->belongsTo('App\Models\Favorite');
    }
    protected $primaryKey = "titolo";
    protected $autoIncrement = false;
    protected $keyType = "string";

  
}