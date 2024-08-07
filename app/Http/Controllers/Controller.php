<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function show_formulario(){

        return view('admin.agregar_usuarios');
    }

    public function registrar_usuarios(){

       
        request()->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:users,email',
            'puesto' => 'required',
            'password' => 'required',
            'planta' => 'required',
            'ubicacion' => 'required',

        ]);

        $usuario = new  User();

        $usuario->name = request('nombre');
        $usuario->email = request('email');
        $usuario->puesto = request('puesto');
        $usuario->planta = request('planta');
        $usuario->ubicacion = request('ubicacion');
        $usuario->password = bcrypt(request('password'));
        $usuario->save();

        return back()->with('agregado', 'El usuario fue agregado');

    }

    public function ingreso_admin(){


        $credenciales = request()->only('email', 'password');


        if(request('tipo') == 'administrador' ){
            
            if(Auth::guard('admin')->attempt($credenciales)){
                return redirect()->route('perfil.admin');            
            }
            else{
                return back()->with('error', 'Las creadenciales de administrador son incorrectas');
            }

        }



        if(request('tipo') == 'usuario'){
            if(Auth::attempt($credenciales)){
                return redirect()->route('perfil.user');            
            }
            else{
                return back()->with('error', 'Las creadenciales de usuario son incorrectas');
            }
        }

        
    }

    public function perfil_user(){
        return view('user.perfil');
    }


    public function perfil_admin(){
        
        return view('admin.perfil');
    }





}
