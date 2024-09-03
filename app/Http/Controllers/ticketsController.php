<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ticketsController extends Controller
{
    public function show(){

        $reportes = Reporte::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('user.perfil_tickets', compact('reportes'));

    }

    public function reporte(){

        
        request()->validate([
            'descripcion' => 'required',
            'dispositivo' => 'required'
        ]);



        Reporte::create([
            'dispositivo' => request('dispositivo'),
            'descripcion' => request('descripcion'),
            'fecha_reporte' => substr(Carbon::now(), 0, 10),
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
}
