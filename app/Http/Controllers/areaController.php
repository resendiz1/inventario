<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class areaController extends Controller
{
    public function store(){
        return view('add_area');
    }

    public function create(){
        return request();
    }
}
