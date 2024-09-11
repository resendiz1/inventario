<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    use HasFactory;



    protected $fillable = ['nombre', 'tipo', 'justificacion', 'user_id'];


    public function user(){

        return $this->belongsTo(User::class);
        
    }

}
