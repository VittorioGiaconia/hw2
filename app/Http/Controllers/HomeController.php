<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Post;

class HomeController extends BaseController
{
    public function home()
    {    
     if(!Session::get('user_username'))
     {
         return redirect('login');
     }
     $user = User::find(Session::get('user_username'));
     return view('home')->with('username', $user->username );
 
    }

    public function api(){
    $url = "https://newsapi.org/v2/everything?q=motoGP&language=it&sortBy=publishedAt&apiKey=2fa3182f41284b2088b306e771799ebc";
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    //curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch); 
    $json = json_decode($result, true);
    curl_close($ch);
    return json_encode($json); 
     
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

 