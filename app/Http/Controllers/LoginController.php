<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return View("Pages.login");
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'emailid' => 'required|email',
            'password' => 'required'
        ]);
        
        $email=$request->get('emailid');
        $password=$request->get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password,'status'=>'1']) )
        {
            return redirect()->intended('/user/profile');
        }   
        else 
        {
            return redirect()->intended('/login');
        }
    }
}
