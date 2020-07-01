<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function register(Request $request){
        $f_name = $request['f_name'];
        $l_name = $request['l_name'];
        $data = array('f_name' => $f_name,'l_name' => $l_name);
        return view('welcome', $data);
    }

    public function back(){
        return view('index');
    }
}
