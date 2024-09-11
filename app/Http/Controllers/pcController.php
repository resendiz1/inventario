<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Computadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class pcController extends Controller
{
    public function store(){

        $usuarios = User::all();
        return view('admin.add_pc', compact('usuarios'));
    }


    public function create(){
        
        request()->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'so' => 'required',
            'usuario' => 'required',
            'numero_serie' => 'required',
            'size_hdd' => 'required',
            'size_ssd' => 'required',
            'size_ram' => 'required',
            'imagen1' => 'required',
            'estado' => 'required',
            'imagen2' => 'required',
            'imagen3' => 'required',
            'observaciones' => 'required'

        ]);
        
        

        $imagen1 = request()->file('imagen1')->store('public');
        $imagen2 = request()->file('imagen2')->store('public');
        $imagen3 = request()->file('imagen3')->store('public');

        

        $pc = new Computadora;

        $pc->marca = request('marca');
        $pc->tipo = request('tipo');
        $pc->modelo = request('modelo');
        $pc->numero_serie = request('numero_serie');
        $pc->size_hdd = request('size_hdd');
        $pc->size_ssd = request('size_ssd');
        $pc->SO = request('so');
        $pc->estado = request('estado');
        $pc->user_id = request('usuario');
        $pc->observaciones = request('observaciones');
        $pc->imagen1 = request('imagen1');
        $pc->imagen2 = request('imagen2');
        $pc->imagen3 = request('imagen3');

        $pc->save();

        return redirect()->route('add_pc')->with('agregada', 'Computadora agregada');

    }


    public function show(){
        return view('resultados.pc');
    }
}
