<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Telefono;
use Illuminate\Http\Request;

class telefonoController extends Controller
{
    public function store(){

        $usuarios = User::all();

        return view('admin.add_telefono', compact('usuarios')) ;
    }

    public function create(){


        request()->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required|unique:telefonos',
            'observaciones' => 'required',
            'imagen1' => 'required',
            'imagen2' => 'required',
            'imagen3' => 'required',
            'usuario' => 'required'
        ]);

            $imagen1 = request()->file('imagen1')->store('public');
            $imagen2 = request()->file('imagen2')->store('public');
            $imagen3 = request()->file('imagen3')->store('public');


        Telefono::create([
            'marca' => request('marca'),
            'user_id' => request('usuario'),
            'modelo' => request('modelo'),
            'serie' => request('serie'),
            'observaciones' => request('observaciones'),
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3
        ]);


        return redirect()->route('add.telefono')->with('agregado', 'El telefono fue agregado');
    }






     public function show(){
         return view('resultados.ups');
     }
}
