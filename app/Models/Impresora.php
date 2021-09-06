<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresora extends Model
{
    use HasFactory;

    protected $fillable = ['area', 'marca', 'modelo', 'tipo', 'serie', 'observaciones', 'imagen1', 'imagen2'];
}
