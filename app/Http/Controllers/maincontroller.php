<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function inicio () {
        return view('inicio');
    }
    public function borrador () {
        return view('borrador');
    }
}
