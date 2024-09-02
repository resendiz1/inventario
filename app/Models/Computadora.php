<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;

    protected $fillable = ['area', 'marca', 'modelo', 'pulgadas', 'touch', 'so', 'procesador', 'usuario', 'ip', 'mac', 'tipo', 'serie', 'frecuencia_ram', 'tipo_ram', 'size_hdd', 'size_ssd', 'slot1_ram', 'slot2_ram', 'slot3_ram', 'slot4_ram', 'imagen1', 'imagen2', 'imagen3'];

    
    public function user(){
        return $this->belongsTo(User::class);
    }




}
