<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reporte;
use App\Models\Seguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ticketsController extends Controller
{
    public function show(){

        $reportes = Reporte::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->simplePaginate(4);

        return view('user.perfil_tickets', compact('reportes'));

    }

    public function reporte(){



        if(request('dispositivo') == 'Otro'){

            request()->validate([
                'descripcion' => 'required',
                'otro' => 'required',
                'prioridad' => 'required'
            ]);

        }


        else{
            
            request()->validate([
                'descripcion' => 'required',
                'dispositivo' => 'required',
                'prioridad' => 'required'
            ]);
        }




    

        Reporte::create([
            'dispositivo' => request('dispositivo'),
            'descripcion' => request('descripcion'),
            'prioridad' => request('prioridad'),
            'fecha_reporte' => substr(Carbon::now(), 0, 10),
            'otro' => request('otro'),
            'user_id' => Auth::user()->id,
        ]);


        return back()->with('reportado', 'El reporte fue enviado!');
    
    }


    public function reporte_completo($id){

     $reportes = Reporte::findOrFail($id);
     $reportes->status = 'completado';
     $reportes->save();
     
     return back()->with('completado', 'El reporte fue cerrado con éxito!');

    }


    public function detalle_reporte($id){

        
        $reporte = Reporte::findOrFail($id);
        $comentarios = Seguimiento::where('reporte_id', $id)->get();
        return view('user.detalle_reporte', compact('reporte', 'comentarios'));

    }




    public function comentario_usuario($id){
        

        $usuario = Auth::user()->name;
        $fecha = substr(Carbon::now(),0, 11);


        request()->validate([
            'comentario' => 'required'
        ]);

        //guardando los datos con la asignacion masiva
        Seguimiento::create([
            'usuario' => $usuario,
            "fecha" => $fecha,
            'reporte_id' => $id,
            'comentario' => request('comentario')
        ]);


        return back()->with('comentado', 'Listo! ');





    

    }



}
