<?php

namespace App\Http\Controllers;

use App\Models\Impresora;
use Illuminate\Http\Request;

class printerController extends Controller
{

    public function store(){
        return view('admin.add_printer');
    }




    public function create(){

        //validando los datos
        request()-> validate([
            'area' => 'required',
            'marca' => 'required',
            'titular' => 'required',
            'modelo' => 'required',
            'tipo' => 'required',
            'serie' => 'required|unique:impresoras',
            'observaciones' => 'required',
            'imagen1' => 'required',
            'imagen2' => 'required'
        ]);
        //validando los datos

        
        //insertando la imagen
        $imagen1 = request()->file('imagen1')->store('public');
        $imagen2 = request()->file('imagen2')->store('public');
        //insertando la imagen

        
        //Agregando los datos a la BD   
        Impresora::create([
            'area' => request('area'),
            'titular' => request('titular'),
            'marca' => request('marca'),
            'modelo' => request('marca'),
            'tipo' => request('tipo'),
            'serie' => request('serie'),
            'observaciones' => request('observaciones'),
            'imagen1' => $imagen1,
            'imagen2' => $imagen2
        ]);
        //Agregando los datos a la BD


        return redirect()->route('add_printer')->with('agregado', 'Impresora agregada a el área de: ' .request('area'));

   


    }

    public function show(){
        return view('resultados.printer');
    }
}
