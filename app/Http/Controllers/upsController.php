<?php

namespace App\Http\Controllers;

use App\Models\Regulador;
use Illuminate\Http\Request;

class upsController extends Controller
{
    public function store(){
        return view('admin.add_telefono') ;
    }

    public function create(){

        request()->validate([
            'area' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required|unique:reguladores',
            'observaciones' => 'required',
            'imagen1' => 'required',
            'imagen2' => 'required',
            'imagen3' => 'required',
            'titular' => 'required'
        ]);

            $imagen1 = request()->file('imagen1')->store('public');
            $imagen2 = request()->file('imagen2')->store('public');
            $imagen3 = request()->file('imagen3')->store('public');


        Regulador::create([
            'area' => request('area'),
            'titular' => request('titular'),
            'marca' => request('marca'),
            'modelo' => request('modelo'),
            'serie' => request('serie'),
            'observaciones' => request('observaciones'),
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3
        ]);


        return redirect()->route('add_ups')->with('agregado', 'No-Breake agregado a el area de: '. request('area'));
    }


     public function show(){
         return view('resultados.ups');
     }
}
