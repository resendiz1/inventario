<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tintasController extends Controller
{
    public function show(){
        return view('user.perfil_tintas');
    }
}
