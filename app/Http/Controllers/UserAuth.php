<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $request){
        $getname = $request->input('uname');
        $request->session()->put('username',$getname);
        echo session('username');
        return redirect('denied');
    }

    
}
