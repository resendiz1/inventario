<?php

namespace App\Http\Controllers;

use BD;
use DB;
use Carbon\Carbon;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tintasController extends Controller
{
    public function show(){

        $pedidos = Pedido::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->simplePaginate(7);

        return view('user.perfil_tintas', compact('pedidos'));


    }

    
    public function pedido(){



        
        if(request('numero') == 'Cintas'){

            request()->validate([
                'numero' => 'required',
                'cantidad_cintas' => 'required',
               ]);

               $colores = "[".request('cantidad_cintas')."]";
       
        }


        if(request('numero') == 'Otra'){

            request()->validate([
                'numero' => 'required',
                'marca' => 'required',
                'checkboxes' => 'required|array|min:1',
               ]);


             $colores = json_encode(request('checkboxes'));

        }



        if(request('numero') != 'Otra'  && request('numero') != 'Cintas'){
            
            request()->validate([
             'checkboxes' => 'required|array|min:1',
             'numero' => 'required'
            ]);
    
            //convirtiendo los datos a JSON para poder meter el array en la bd    
            $colores = json_encode(request('checkboxes'));
        }





            

            





        $fecha_hoy = substr(Carbon::now(), 0, 10);

   

        //Guardando los datos en la bd
        Pedido::create([
            'numero' => request('numero'),
            'colores' =>$colores, 
            'fecha_pedido' => $fecha_hoy,
            'user_id' => Auth::user()->id,
            'marca' => request('marca'),
            'cantidad' => request('cantidad')
        ]);

        return back()->with('pedido_enviado', 'El pedido fue enviado!');


        
    }


    public function pedido_completo($id){

        $pedido = Pedido::findOrFail($id);

        $pedido->fecha_entrega = substr(Carbon::now(), 0, 11);
        $pedido->status = 'Completado';

        $pedido->update();


        return back()->with('completado', 'Se marco el pedido como completado');


    }



}
