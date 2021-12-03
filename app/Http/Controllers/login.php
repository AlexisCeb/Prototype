<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function login (Request $request){
        $user=$request ->input('user');
        $pass=$request ->input('pass');
        return view('check',['user' =>$user, 'pass' => $pass]);
    }
}
