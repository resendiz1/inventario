<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = ['dispositivo', 'descripcion', 'fecha_reporte', 'fecha_solucion', 'detalles_solucion', 'user_id'];

    protected $table = 'reportes';
}
