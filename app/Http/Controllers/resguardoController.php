<?php

namespace App\Http\Controllers;

use App\Models\Resguardo;
use App\Models\User;
use App\Models\Telefono;
use App\Models\Impresora;
use App\Models\Computadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class resguardoController extends Controller
{
    public function show(){
        
       $usuario = User::findOrFail(Auth::user()->id); 
       $computadoras = $usuario->computadoras;
       $impresoras = $usuario->impresoras;
       $telefonos = $usuario->telefonos;
       $resguardo = $usuario->resguardos;


       return view('assets.resguardo', compact('computadoras', 'impresoras', 'telefonos', 'usuario', 'resguardo'));


    }


    public function confirmar(){
        
        $resguardo = new Resguardo();
        $resguardo->user_id = request('id_user');
        $resguardo->aceptado = true;
        $resguardo->$resguardo;
        $resguardo->save();

        return back()->with('aceptado', 'Gracias por aceptar le resguardo!');

    }
}
