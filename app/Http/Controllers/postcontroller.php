<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class postcontroller extends Controller
{
    function addlist(Request $req){
        $device = new device;
        $device->id=$req->id;
        $device->name=$req->name;
        $device->memberid=$req->memberid;
        $result=$device->save();
        if ($result){
            return ["result"=>"done"];
        }
        else {
            return ["result"=>"operation failed"];
        }
    }


    function update(Request $req)
    {
    $device= Device::find($req->id);
    $device->id=$req->id;
     $device->name=$req->name;
     $device->memberid=$req->memberid;
     $result=$device->save();
     if ($result){
        return ["result"=>"done"];
    }
    else {
        return ["result"=>"operation failed"];
    }
    
    }
}
