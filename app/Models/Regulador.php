<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulador extends Model
{
    use HasFactory;

    protected $table = "reguladores";

    protected $fillable = ['area', 'marca', 'modelo', 'serie', 'observaciones', 'imagen1', 'imagen2', 'imagen3'];
}
