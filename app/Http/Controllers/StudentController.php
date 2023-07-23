<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class StudentController extends Controller
{
    function list(){
    return Device::all();
    }
}
