<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use App\Models\Impresora;
use App\Models\Regulador;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return  view('home');
    }


    public function buscar(){

        request()->validate([
            'busqueda' => 'required'
        ]);
        
        $resultado=null;

        if(request('impresoras')=='on'){

            if(request('marca')=='on'){
                $resultado = Impresora::where('marca' , request('busqueda'))->get();
            }

            if(request('modelo')== 'on'){
                $resultado = Impresora::where('modelo', request('busqueda'))->get();
            }

            if(request('serie')== 'on'){
                $resultado = Impresora::where('serie', request('busqueda'))->get();
            }
        }

        if(request('computadoras')== 'on'){

            if(request('marca')== 'on'){
                $resultado = Computadora::where('marca', request('busqueda'))->get();
            }
            if(request('modelo')== 'on'){
                $resultado = Computadora::where('modelo', request('busqueda'))->get();
            }
            if(request('serie')== 'on'){
                $resultado = Computadora ::where('serie', request('busqueda'))->get();
            }
        }

        if(request('reguladores') == 'on'){

            if(request('serie')){
                $resultado = Regulador::where('serie', request('busqueda'))->get();
            }

            if(request('marca')){
                $resultado = Regulador::where('marca', request('busqueda'))->get();
            }

            if(request('modelo')){
                $resultado = Regulador::where('modelo', request('busqueda'))->get();
            }
        }


        return view('home', compact('resultado'));
    }
}
