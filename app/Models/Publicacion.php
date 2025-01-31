<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;


    protected $table = 'publicaciones';
    protected $fillable= ['titulo', 'categoria', 'introduccion', 'portada', 'cuerpo'];


    public function comentarios(){
        return  $this->hasMany(Comentario::class);
    }

    public function reacciones(){
        return $this->hasMany(Reaccion::class);
    }







}
