<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pcController extends Controller
{
    public function store(){
        return view('add_pc');
    }


    public function create(){
        return request();
    }
}
