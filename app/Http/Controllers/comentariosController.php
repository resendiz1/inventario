<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class comentariosController extends Controller
{


    public function store(Request $request){

    // Validamos que el comentario no esté vacío y tenga máximo 500 caracteres
    $request->validate([
        'comentario' => 'required|string|max:500',
    ]);

    // Creamos un nuevo comentario
    $comentario = new Comentario();
    $comentario->user_id = $request->id_user; // Asignamos el ID del usuario autenticado
    $comentario->publicacion_id = $request->id_publicacion;
    $comentario->comentario = $request->comentario;
    $comentario->save(); // Guardamos el comentario en la base de datos


    // Retornamos una respuesta JSON para que JavaScript la pueda manejar
    return response()->json([
        'success' => true, // Indicamos que la operación fue exitosa
        'comentario' => $comentario->comentario // Enviamos el comentario de vuelta al frontend
    ]);


    }


}
