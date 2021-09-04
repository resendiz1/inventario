<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class pcController extends Controller
{
    public function store(){
        return view('add_pc');
    }


    public function create(){
        
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
            'imagen1' => request('imagen1'),
            'imagen2' => request('imagen2'),
            'imagen3' => request('imagen3')
        ]);

        return 'exito';

    }
}
