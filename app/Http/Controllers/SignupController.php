<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Userverification;
use App\Teamindustry;

use Mail;
use Cookie;

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

    public function checkverificationmail(Request $request)
    { 
        $emailid= $request->get("emailid");
        $data["Email address"]=$emailid;
        
        $count = \App\Userverification::where(['emailaddress'=>$emailid,'status'=>'1'])->count();
        $data["count"]=$count;
        echo \json_encode($data);
   
    }

    public function verifysignupemail(Request $request)
    {
        
        $emailid= $request->get("emailid");
        $token=$request->get("txt_1").$request->get("txt_2").$request->get("txt_3").$request->get("txt_4").$request->get("txt_5").$request->get("txt_6");
        $update = \App\Userverification::where(['emailaddress'=>$emailid,'token'=>$token])->update(['status' => 1]);
        $data["count"]=$update;
        if($update)
        {
            $minutes=time()+3600;
            
           // $response = new \Illuminate\Http\Response('regemail');
            //$response->withCookie(cookie('email', $emailid, 3600));
            //return $response;

            Cookie::queue(Cookie::make('remail',  $emailid, 3600));


            //$cookie = Cookie::make('email', $emailid);
            
        }
        echo \json_encode($data);
    }


    public function sendverificationmail(Request $request)
    { 
       $emailid= $request->get("emailid");
        $verificationinsert = new Userverification;

        $result = '';

        $length=6;
        for($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }

        
        
        $signup = $verificationinsert::firstOrNew(array('emailaddress'=> $emailid, 'status' => 0));
        $signup->token =  $result;
        $signup->status =  '0';
        $signup->save(); 
        
        

        $data = ['token'=>$result,'email'=>strip_tags($emailid)];
        
        Mail::send('mail', $data, function($message)use($emailid) {
            $message->to($emailid, $emailid)->subject
               ('77 Tec User Verification');
            $message->from('bmatescochin@gmail.com','77 TEC');
         });

         echo "Email Sent. Check your inbox.";

    }




    /*
    Signing up Step2
    */

    public function step2(Request $request)
    {
        $data=[];
        $value  = $request->cookie('remail');

        $data["emailid"]=$value;
        return view('pages.signup.step2',['init'=>$data] );
    }

    public function poststep2(Request $request)
    {
        $request->validate([
            'Memberslimit' => 'required',
            'teamname' => 'required',
        ]);

        Cookie::queue(Cookie::make('Memberslimit',  $request->get('Memberslimit'), 3600));
        Cookie::queue(Cookie::make('teamname',  $request->get('teamname'), 3600));
        return \redirect('signup/step3');
        
    }

    public function step3(Request $request)
    {
        $data=[];
        $teamindustryds=\App\Teamindustry::all();
        $value  = $request->cookie('remail');
        $data["emailid"]=$value;
        $data["teamindustryds"]=$teamindustryds;
        return view('pages.signup.step3')->with($data);
    }

    public function poststep3(Request $request)
    {
        $request->validate([
            'TeamIndustry' => 'required',
            
        ]);

        Cookie::queue(Cookie::make('TeamIndustry',  $request->get('TeamIndustry'), 3600));
        
        return \redirect('signup/step4');
        
    }



    public function step4(Request $request)
    {
        $data=[];
        //$teamindustryds=\App\Teamindustry::all();
        
       
        return view('pages.signup.step4')->with($data);
    }

}
