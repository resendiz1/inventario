<?php

namespace App\Http\Controllers;

use App\Models\Reaccion;
use Illuminate\Http\Request;

class reaccionesController extends Controller
{
    

    public function reaccion_store(){
        
        
        $reaccion = new Reaccion();

        $reaccion->reaccion = request('reaccion');
        $reaccion->publicaciones_id = request('publicacion_id');
        $reaccion->users_id = request('user_id');
        $reaccion->save();

        return back();



    }


}
