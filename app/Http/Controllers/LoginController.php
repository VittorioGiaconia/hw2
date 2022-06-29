<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LoginController extends BaseController
{
    public function login_form()
    {    
     if(Session::get('user_username'))
     {
         return redirect('home');
     }
     $error= Session::get('error');
     Session::forget('error');
     return view('login')->with('error', $error);
 
    }
 
    public function do_login()
    {
         if(Session::get('user_username'))
         {
         return redirect('home');
         }
 
         if(strlen(request('username')) == 0 || strlen(request('password')) == 0  ){
 
             Session::put('error', 'empty_fields');
             return redirect('login')->withInput();
             
         }
         $user = User::where('username', request('username'))->first();
         if (!$user || request('password') != $user->password)
        {
            Session::put('error','wrong');
            return redirect('login')->withInput();
        }        

         Session::put('user_username', $user->username);
         return redirect('home');
 
 
    }
  
}
