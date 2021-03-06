<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Userlogin;
use App\Mail\Testmail;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Null_;

class myLogin extends Controller
{
    //
    function mylogin(Request $request){
        //return $request->input();
        $username = Userlogin::where(['uname'=>$request->uname])->first();
      //  $hashedPassword = Hash::check($request->pwd,$username->pwd);
      
    if(!$username || !Hash::check($request->passwd,$username->pwd))
    {
        
        return "Username & Password Mismatch";
    }
    else {
        $request->session()->put('user',$username);
        return redirect('homepage');
    }
    
    }

    function userRegister(Request $request){
        $pdata = new Userlogin;
        $pdata->uname=$request->uname;
        $pdata->fname=$request->fname;
        $pdata->lname=$request->lname;
        //$pdata->pwd=$request->passwd;
        $pdata->pwd = Hash::make($request->passwd);
        $pdata->address=$request->addr;
        $pdata->save();
        return redirect('registration');
    }
    function sendEmail(){
        $details = [
            'title'=>'Mail from laravel',
            'body'=>'This is test mail send from laravel 8',
        ];
        Mail::to("ypdowork@gmail.com")->send(new Testmail($details));
        return "Email Send";
    }
}
