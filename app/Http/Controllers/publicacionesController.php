<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class publicacionesController extends Controller
{
    
    public function show(){

        $publicaciones = Publicacion::all();
        return view('admin.gestionar_publicaciones', compact('publicaciones'));


    }

    public function agregar_post(){

        return view('admin.agregar_post');

    }

    public function post_store(){



        if(request()->hasFile('portada')){
            $portada = request()->file('portada')->store('public');
        }


        request()->validate([
            'titulo' => 'required',
            'introduccion' => 'required',
            'cuerpo' => 'required',
            'portada' => 'required',
            'categoria' => 'required',
        ]);
    
        $publicacion = new Publicacion();

        $publicacion->titulo = request('titulo');
        $publicacion->introduccion = request('introduccion'); 
        $publicacion->cuerpo = request('cuerpo');
        $publicacion->portada = $portada;
        $publicacion->categoria = request('categoria');
        $publicacion->autor = Auth::guard("admin")->user()->nombre;

        $publicacion->save();



        return back()->with('publicacion_agregada', 'Publicacion agregada correctamente');
    }





}
