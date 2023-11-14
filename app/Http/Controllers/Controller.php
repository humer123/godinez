<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\humer;

class Controller extends BaseController
{
    public static function addstudent(Request $request){
        $a = new humer();
        $a->name = $request->name;
        $a->age = $request->age;
        $a->address = $request->address;

        $a->save();
        return humer::all();
    }
    public static function updatestudent(Request $request){
        $a = humer::find($request->id);
        $a->name = $request->name;
        $a->age = $request->age;
        $a->address = $request->address;

        $a->save();
        return humer::all();
    }
    public static function deletestudent(Request $request){
        $a = humer::find($request->id);

        $a->delete();
        return humer::all();
    }
    public static function getAllstudent(){
        return humer::all();
    }
}
