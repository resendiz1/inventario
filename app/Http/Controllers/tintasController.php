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

        $pedidos = Pedido::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('user.perfil_tintas', compact('pedidos'));


    }

    
    public function pedido(){

        
        //validando los datos
        request()->validate([
            'checkboxes' => 'required|array|min:1',
            'numero' => 'required'
        ]);
        //validando los datos




        //convirtiendo los datos a JSON para poder meter el array en la bd    
        $colores = json_encode(request('checkboxes'));





        //checar la fecha del ultimo pedido
        $ultima_fecha_bruto = Pedido::latest('created_at')->value('fecha_pedido');
        //substr($ultima_fecha_bruto, 0, 10);

        $ultima_fecha_bruto_recortada = substr($ultima_fecha_bruto, 0, 1);
        $fecha_hoy = substr(Carbon::now(), 0, 10);

   
        







        //Guardando los datos en la bd
        Pedido::create([
            'numero' => request('numero'),
            'colores' =>$colores, 
            'fecha_pedido' => $fecha_hoy,
            'user_id' => Auth::user()->id
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
