<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    protected $table = 'telefonos';
    protected $fillable = ['marca','modelo', 'serie', 'imagen1','user_id', 'imagen2', 'imagen3', 'observaciones'];
}
