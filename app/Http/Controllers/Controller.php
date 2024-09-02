<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pedido;
use App\Models\Reporte;
use App\Models\Telefono;
use App\Models\Impresora;
use App\Models\Computadora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function show_formulario(){

        $usuarios = User::all();

        return view('admin.agregar_usuarios', compact('usuarios'));
    }

    public function registrar_usuarios(){

       
        request()->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:users,email',
            'puesto' => 'required',
            'password' => 'required',
            'planta' => 'required',
            'ubicacion' => 'required',
            'extension' => 'required',
            

        ]);

        $usuario = new  User();

        $usuario->name = request('nombre');
        $usuario->email = request('email');
        $usuario->puesto = request('puesto');
        $usuario->planta = request('planta');
        $usuario->ubicacion = request('ubicacion');
        $usuario->extension = request('extension');
        $usuario->celular = request('celular');
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


        $user = User::find(Auth::user()->id);
        $computadoras = $user->computadoras;
        $impresoras = $user->impresoras;
        $telefonos = $user->telefonos;

        return view('user.perfil_dispositivos', compact('computadoras', 'impresoras', 'telefonos'));
    }


    public function perfil_admin(){


        //ojala esto lo pudiera extraer en un archivo aparte
        $cantidad_computadoras = Computadora::count();
        $cantidad_impresoras = Impresora::count();
        $cantidad_telefonos = Telefono::count();
        $pedidos = Pedido::where('status', 'pendiente')->with('user')->get();
        $reportes = Reporte::where('status', 'pendiente')->get();



        return view('admin.perfil', compact('cantidad_computadoras', 'cantidad_impresoras', 'cantidad_telefonos', 'pedidos', 'reportes'));
    }


    public function cerrar_session(){
        
        Session::flush(); //Manda alv la session
        Auth::logout();
        return back();

    }





}
