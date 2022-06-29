<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class StartController extends BaseController
{

    public function start()
    {    
     if(Session::get('user_username'))
     {
         return redirect('home');
     }
     $error= Session::get('error');
     Session::forget('error');
     return view('start')->with('error', $error);
 
    }
}