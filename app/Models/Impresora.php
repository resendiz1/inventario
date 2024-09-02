<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresora extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'titular', 'marca', 'modelo', 'tipo', 'serie', 'observaciones', 'imagen1', 'imagen2'];



    public function user(){
        return $this->belongsTo(User::class);

    }


}
