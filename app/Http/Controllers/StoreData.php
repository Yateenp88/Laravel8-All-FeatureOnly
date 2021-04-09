<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreData extends Controller
{
    //FLASH DATA function retreive data ones only after refresh it will lost
     //form submit post data using controller
     function storeData1(Request $request){
        //TO Return all input from FORM
        $data = $request->input('uname');
        $request->session()->flash('username',$data);
        return redirect('store');
        //return $request->post('_token');

    }
}
