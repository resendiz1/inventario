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
            'serie' => 'required',
            'observaciones' => 'required',
            'comparte' => 'required',
            'tipo' => 'required',
            'estado' => 'required',
            'estado' => 'required',
            'usuario' => 'required'

        ]);



        $imagen1 = '';
        $imagen2 = '';
        $imagen3 = '';



        if(request()->hasFile('imagen1')){
            $imagen1 = request()->file('imagen1')->store('public');
        }


        if(request()->hasFile('imagen2')){
            $imagen2 = request()->file('imagen2')->store('public');
        }

        
        if(request()->hasFile('imagen3')){
            $imagen3 = request()->file('imagen3')->store('public');
        }




        Telefono::create([
            'marca' => request('marca'),
            'user_id' => request('usuario'),
            'modelo' => request('modelo'),
            'serie' => request('serie'),
            'tipo' => request('tipo'),
            'comparte' => request('comparte'),
            'estado' =>request('estado'),
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


     public function lista_telefonos(){

        $telefonos = Telefono::all();
        return view('admin.dispositivos.telefonos', compact('telefonos'));

     }





     public function fotos_telefono_usuario($id){

        $telefono = Telefono::findOrFail($id);

        $imagen1= $telefono->imagen1;
        $imagen2= $telefono->imagen2;
        $imagen3= $telefono->imagen3;



        if(request()->hasFile('imagen1')){
            $imagen1 = request()->file('imagen1')->store('public');
        }
        if(request()->hasFile('imagen2')){
            $imagen2 = request()->file('imagen2')->store('public');
        }
        if(request()->hasFile('imagen3')){
            $imagen3 = request()->file('imagen3')->store('public');
        }


        $telefono->imagen1 = $imagen1;
        $telefono->imagen2 = $imagen2;
        $telefono->imagen3 = $imagen3;


        $telefono->update();



        return back()->with('fotos_subidas', 'Muchas gracias');






    }



}
