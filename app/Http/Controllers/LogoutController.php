<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LogoutController extends BaseController
{
    public function Logout(){
        Session::flush();
        return redirect('login');
       }
}