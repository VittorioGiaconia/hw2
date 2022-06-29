<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Post;

class SearchController extends BaseController
{
    public function search()
    {    
     if(!Session::get('user_username'))
     {
         return redirect('login');
     }
     $user = User::find(Session::get('user_username'));
     return view('search')->with('username', $user->username );
 
    }
    public function inserisci_in_DB($a,$t,$c,$i,$l)
    {
     $user = User::find(Session::get('user_username'));
     $img = str_replace("-----", "/", $i);
     $link = str_replace("-----", "/", $l);
        
    
     if($pos = Post::where('titolo','=',$t)->first()){
     $favorite = new Favorite();
     $favorite->user_username = $user->username;
     $favorite->titolo = $t;
     $favorite->save();
     }

     else{
     $post = new Post();
     $post->autore = $a;
     $post->titolo = $t;
     $post->contenuto = $c;
     $post->url_img = $img;
     $post->url_link = $link;
     $post->save();
     
     $favorite = new Favorite();
     $favorite->user_username = $user->username;
     $favorite->titolo = $t;
     $favorite->save();
     }

     return [];

    }
}