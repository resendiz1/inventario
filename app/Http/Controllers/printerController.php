<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class printerController extends Controller
{
    public function store(){
        return view('add_printer');
    }

    public function create(){
        return request();
    }
}
