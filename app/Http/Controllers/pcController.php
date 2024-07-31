<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class pcController extends Controller
{
    public function store(){
        return view('admin.add_pc');
    }


    public function create(){
        
      




        return redirect()->route('add_pc')->with('agregada', 'Computadora agregada al área de: '.request('area'));

    }


    public function show(){
        return view('resultados.pc');
    }
}
