<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherControllers extends Controller
{
    //
    public function program() {
        return view('program');
    }

    public function program1() {
        return view('program1');
    }
    public function program2() {
        return view('program2');
    }

    public function aboutus(){
        return view('aboutus');
    }
}
