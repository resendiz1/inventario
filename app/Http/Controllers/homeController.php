<?php

namespace App\Http\Controllers;

use App\Models\Impresora;
use App\Models\Regulador;
use App\Models\Computadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){



        return view('home');  
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



        //La concha de su hermana, ahora voy a tener que implementar este codigo dentro de aqui por que se borraba los contadores 
        //y se queda en la funcion de alla arriba para qeu cargue los contadores al momentos de cargar el inicio
                //Hago las consultas de la cantidad de cada dispositivo en la BD
                $contador_computer = DB::select('select count(serie) from computadoras');
                $contador_printer = DB::select('select count(serie) from impresoras');
                $contador_ups = DB::select('select count(serie) from reguladores');
        
    
                 $contadorComputadoras = $contador_computer[0]->{'count(serie)'};
                 $contadorImpresoras = $contador_printer[0]->{'count(serie)'};
                 $contadorReguladores = $contador_ups[0]->{'count(serie)'};








        return view('home', compact('resultado', 'contadorComputadoras', 'contadorImpresoras', 'contadorReguladores'));
    }



    public function show($series){

        //Verifica si hay algun resultado en base a la query realizada, si es asi solo lo muestra
        if($resultado = DB::select('select*from impresoras where serie ="'.$series.'"')){
            return view('resultados.printer', compact('resultado'));
        }



        //Verifica si hay algun resultado en base a la query realizada, si es asi solo lo muestra
        if($resultado = DB::select('select*from computadoras where serie ="'.$series.'"')){
            return view('resultados.pc', compact('resultado'));
        }



        //Verifica si hay algun resultado en base a la query realizada, si es asi solo lo muestra
        if($resultado = DB::select('select*from reguladores where serie ="'.$series.'"')){
            return view('resultados.ups', compact('resultado'));
        }
    

    }

    public function count(){
        $variable = 000;
        return view('home', compact('variable'));
    }

}
