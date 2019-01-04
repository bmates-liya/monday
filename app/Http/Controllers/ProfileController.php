<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view("pages.user.index");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
