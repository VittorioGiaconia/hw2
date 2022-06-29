<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Post;

class PreferitiController extends BaseController
{
    public function preferiti()
    {    
     if(!Session::get('user_username'))
     {
         return redirect('login');
     }
     $user = User::find(Session::get('user_username'));
     return view('preferiti')->with('username', $user->username );
 
    }
    
    public function print()
    {    
     if(!Session::get('user_username'))
     {
         return [];
     }
     $user = User::find(Session::get('user_username'));
     
     $posts = DB::table('favorites')
     ->join('posts', 'favorites.titolo', '=', 'posts.titolo')
     ->where('favorites.user_username', '=', $user->username)
     ->select('posts.autore','posts.titolo','posts.contenuto', 'posts.url_img', 'posts.url_link')
     ->get();
     
     return $posts;

    }
    
    public function delete($tit)
    {    
     if(!Session::get('user_username'))
     {
         return [];
     }
     $user = User::find(Session::get('user_username'));
     
     DB::table('favorites')
     ->where('titolo', '=', $tit)
     ->delete();
     
     return [];

    }
    

}