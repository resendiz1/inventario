<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resguardo extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'aceptado'];




    public function user(){
        return $this->belongsTo(User::class);
    }


}
