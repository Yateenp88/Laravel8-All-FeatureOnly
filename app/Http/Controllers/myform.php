<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\profiledata;
use App\Models\Tracklog;

class myform extends Controller
{
    //
    function index(Request $request){
        //TO Return all input from FORM
        //return $request->post();
        return $request->post('_token');

    }

    function dbConnect(){
        return DB::select("select * from linkdetail");
    }

    function getData(){
        return User::all();
    }


    function addData(Request $request){
        $pdata = new profiledata;
        $pdata->uname=$request->uname;
        $pdata->email=$request->email;
        $pdata->mob=$request->mobile;
        $pdata->save();
        return redirect('adddata');
    }

    function showData(){
        $getdata=Tracklog::paginate(5);

        return view('pagination',['pagelists'=>$getdata]);
    }
    function viewRecord(){
        $getdata=Tracklog::all();

        return view('modify',['pagelists'=>$getdata]);
    }
    function viewList(){
        $getdata=profiledata::all();

        return view('list',['profilepage'=>$getdata]);
    }

    function delete($id){
        $data = profiledata::find($id);
        $data->delete();
        return redirect('list');
    }
    
    function edData($id){
       $data=  profiledata::find($id);
       return view('modify',['data'=>$data]);
         
    }
    function update(Request $request){
        $data=profiledata::find($request->id);
        $data->uname=$request->uname;
        $data->email=$request->email;
        $data->mob=$request->mob;
        $data->save();
        return redirect('list');
    }
}
