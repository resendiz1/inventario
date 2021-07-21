<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upsController extends Controller
{
    public function store(){
        return view('add_ups') ;
    }

    public function create(){
        return request();
    }
}
