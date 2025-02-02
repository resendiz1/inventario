<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class publicacionesController extends Controller
{
    
    public function show(){
        return view('admin.gestionar_publicaciones');
    }

    public function agregar_post(){

        return view('admin.agregar_post');

    }

    public function post_store(){


        if(request()->hasFile('portada_imagen')){
            return $portada = request()->file('portada_imagen')->store('public');
        }


        request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'contenido' => 'required',
            'portada' => 'required',
            'categoria' => 'required',
        ]);
    
        $publicacion = new Publicacion();

        $publicacion->titulo = request('titulo');
        $publicacion->descripcion = request('descripcion'); 
        $publicacion->contenido = request('contenido');
        $publicacion->imagen = $portada;
        $publicacion->categoria = request('categoria');
        $publicacion->fecha = request('fecha');
        $oublicacion->autor = Auth::guard("admin")->user()->nombre;

        $publicacion->save();



        return back()->with('publicacion_agregada', 'Publicacion agregada correctamente');
    }


}
