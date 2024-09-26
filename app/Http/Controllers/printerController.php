<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Impresora;
use Illuminate\Http\Request;

class printerController extends Controller
{

    public function store(){

        $usuarios = User::all();
        return view('admin.add_printer', compact('usuarios'));

    }




    public function create(){



        //validando los datos
        request()-> validate([
            'marca' => 'required',
            'usuario' => 'required',
            'modelo' => 'required',
            'comparte' => 'required',
            'tipo' => 'required',
            'estado' => 'required', 
            'serie' => 'required',
            'observaciones' => 'required',
        ]);
        //validando los datos



        $imagen1 = '';
        $imagen2 = '';
        $imagen3 = '';

        if(request()->hasFile('imagen1')){
            $imagen1 = request()->file('imagen1')->store('public');
        }

        if(request()->hasFile('imagen2')){
            $imagen2 = request()->file('imagen2')->store('public');
        }


        
        //Agregando los datos a la BD   
        Impresora::create([
            'user_id' => request('usuario'),
            'marca' => request('marca'),
            'modelo' => request('modelo'),
            'tipo' => request('tipo'),
            'estado' =>request('estado'),
            'comparte' => request('comparte'),
            'serie' => request('serie'),
            'observaciones' => request('observaciones'),
            'imagen1' => $imagen1,
            'imagen2' => $imagen2
        ]);
        //Agregando los datos a la BD


        return redirect()->route('add_printer')->with('agregado', 'Impresora agregada');

   


    }

    public function show(){
        return view('resultados.printer');
    }
}
