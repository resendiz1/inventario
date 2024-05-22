<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function show_formulario(){
        return view('admin.agregar_usuarios');
    }

    public function registrar_usuarios(){

       
        request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'puesto' => 'required',
            'planta' => 'required'             
        ]);

        $usuario = new  User();
        $usuario->name = request('nombre');
        $usuario->email = request('email');
        $usuario->puesto = request('puesto');
        $usuario->puesto = request('planta');
        $usuario->save();


    }


}
