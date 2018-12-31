<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index()
    {
        $data="";
        return view('pages.signup.step1',['init'=>$data] );
        ;
    }
    public function step1()
    {
        $data="";
        return view('pages.signup.verification',['init'=>$data] );
        ;
    }
}
