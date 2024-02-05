<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class testAPI extends Controller
{
    function getData($id=null)
    {
       return $id?contact::find($id):contact::all();
    }
}

// ["name"=>"rama","email"=>"rama@gmail.com","age"=>"27"];