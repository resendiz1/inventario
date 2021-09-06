<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class pcController extends Controller
{
    public function store(){
        return view('add_pc');
    }


    public function create(){

        //Validando los datos
        request()->validate([
            'area' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'pulgadas' => 'required',
            'touch' => 'required',
            'so' => 'required',
            'procesador' => 'required',
            'usuario' => 'required',
            'ip' => 'required',
            'mac' => 'required',
            'tipo' => 'required',
            'serie' => 'required',
            'frecuencia_ram' => 'required',
            'tipo_ram' => 'required',
            'size_hdd' => 'required',
            'size_ssd' => 'required',
            'slot1_ram' => 'required',
            'slot2_ram' => 'required',
            'slot3_ram' => 'required',
            'slot4_ram' => 'required',
            'imagen1' => 'required',
            'imagen2' => 'required',
            'imagen3' => 'required'
        ]);
        //Validando los datos

        //Cachando las imagenes
        $imagen1 = request()-> file('imagen1')->store('public'); 
        $imagen2 = request()->file('imagen2')->store('public');
        $imagen3 = request()->file('imagen3')->store('public');

        
        
        Computadora::create([
            'area' => request('area'),
            'marca' => request('marca'),
            'modelo' => request('modelo'),
            'pulgadas' => request('pulgadas'),
            'touch' => request('touch'),
            'so' => request('so'),
            'procesador' => request('procesador'),
            'usuario' =>request('usuario'),
            'ip' => request('ip'),
            'mac' => request('mac'),
            'tipo' => request('tipo'),
            'serie' => request('serie'),
            'frecuencia_ram' => request('frecuencia_ram'),
            'tipo_ram' => request('tipo_ram'),
            'size_hdd' => request('size_hdd'),
            'size_ssd' => request('size_ssd'),
            'slot1_ram' => request('slot1_ram'),
            'slot2_ram' => request('slot2_ram'),
            'slot3_ram' => request('slot3_ram'),
            'slot4_ram' => request('slot4_ram'),
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3
        ]);

        return redirect()->route('add_pc')->with('agregada', 'Computadora agregada al área de: '.request('area'));

    }
}
