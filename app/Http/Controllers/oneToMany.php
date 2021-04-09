<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Device;
class oneToMany extends Controller
{
    //
    function oneToManyRelation(){
        return Member::find(2)->getDevice;
    }
}
