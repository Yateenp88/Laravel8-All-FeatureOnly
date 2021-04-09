<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QueryList extends Controller
{
    //
    function operation(){
        echo "Hello";
    }
    function countTable(){
        return DB::table('linkdetail')->count();  
         
    }
    function queryTable(){
        return DB::table('linkdetail')->get();  
         
    }
    function queryTable2(){
        //return DB::table('linkdetail')->get();  
        $data =  DB::table('linkdetail')->get();
        return view('showDetails',['datatb'=>$data]);    
    }
    function queryTable3(){
        return DB::table('linkdetail')
        ->where('id',1)
        ->get(); 
          
    }
    //Below code if success it will return 1 else 0
    function insertData(){
        return DB::table('linkdetail')
        ->insert([
            'ips'=>'172.16.68.44',
            'ser'=>'DFT7HY6',
            'cir'=>'UMN8988889848984994899N',
            'hel'=>'dd',
            'str'=>'09:33',
            'end'=>'12:00',
            'loc'=>'Ghar',
            'flag'=>2
        ]);
    }
    function updateData(){
        return DB::table('linkdetail')
        ->where('id',2)
        ->update([
            'ips'=>'172.16.68.44',
            'ser'=>'DFT7HY6',
            'cir'=>'UMN8988889848984994899N',
            'hel'=>'dd',
            'str'=>'09:33',
            'end'=>'12:00',
            'loc'=>'Home',
            'flag'=>2
        ]);
    }

    function deleteData(){
        return DB::table('linkdetail')
        ->where('id',2)->delete();

    }

    //Agregate join two table
    function joinData(){
        return DB::table('linkdetail')
        ->join('profiledatas','linkdetail.id','=','profiledatas.id')
        //->select('profiledatas.*','linkdetail.*')
        ->where('linkdetail.id',2)
        ->select('linkdetail.ips','profiledatas.mob')
        ->get();

    }
}
