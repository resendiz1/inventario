<?php

namespace App\Http\Controllers;

use App\Models\Reaccion;
use Illuminate\Http\Request;

class reaccionesController extends Controller
{
    

    public function reaccion_store(){
        

        //verificar si ya existe el registro

        $reacion = Reaccion::firstOrCreate(
            [
                'user_id' => auth()->id(),
                'publicacion_id' => request('publicacion_id')
            ],

            [
                'reaccion' => request('reaccion'),
                'user_id' => auth()->id(),
                'publicacion_id' => request('publicacion_id')
            ]
        );

        return back();
      
        

        // $reaccion = new Reaccion();

        // $reaccion->reaccion = request('reaccion');
        // $reaccion->publicacion_id = request('publicacion_id');
        // $reaccion->user_id = request('user_id');
        // $reaccion->save();

        return back();



    }


}
