<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acceso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class accesosController extends Controller
{
    public function show(){

        $user = User::findOrFail(Auth::user()->id);
        $sitios = $user->accesos()->where('tipo', 'sitio')->get();
        $software = $user->accesos()->where('tipo', 'software')->get();

        return view('user.control_accesos', compact('sitios', 'software'));
    }

    public function show_admin($id){

        $user = User::findOrFail($id);
        $sitios = $user->accesos()->where('tipo', 'sitio')->get();
        $software = $user->accesos()->where('tipo', 'software')->get();

        return view('admin.control_accesos', compact('sitios', 'software', 'user'));
    }



    public function solicita_sitio(){

 
        request()->validate([
            'sitio' => 'required',
            'justificacion_sitio' => 'required',
 
        ]);



        $sitio = Acceso::create([

            'nombre' => request('sitio'),
            'user_id' => Auth::user()->id,
            'tipo' => 'Sitio',
            'id_jefe' => Auth::user()->id_jefe,
            'justificacion' => request('justificacion_sitio')

        ]);


        // $acceso = new Acceso();

        // $acceso->nombre = request('sitio');
        // $acceso->user_id = Auth::user()->id;
        // $acceso->tipo = 'Sitio';
        // $acceso->id_jefe = Auth::user()->id_jefe;
        // $acceso->justificacion = request('justificacion_sitio');

        // $acceso->save();
        



        return response()->json([

            'success' => true,
            'sitio' => $sitio,

        ]);

        return back()->with('solicitado', 'El acceso fue solicitado');

    }



    public function solicita_software(){

        request()->validate([
            'software' => 'required',
            'justificacion_software' => 'required',

        ]);


     $software = Acceso::create([

            'nombre' => request('software'),
            'user_id' => Auth::user()->id,
            'tipo' => 'Software',
            'id_jefe' => Auth::user()->id_jefe,
            'justificacion' => request('justificacion_software')

        ]);




        return response()->json([

            'success' => true,
            'software' => $software,

        ]);

        return back()->with('solicitado', 'El acceso fue solicitado');

    }




    public function autoriza_software($id){

        $software = Acceso::findOrFail($id);

        $software->status = true;
        $software->autorizo = Auth::guard('admin')->user()->nombre;
        $software->save();


        return back()->with('software_autorizado', 'El software se autorizo!');
    
    }

    public function desautoriza_software($id){

        $software = Acceso::findOrFail($id);
        $software->status = false;
        $software->autorizo = Auth::guard('admin')->user()->nombre;
        $software->save();

        return back()->with('software_desautorizado', 'El software se desautorizo!');

    }


    public function autoriza_sitio($id){

        $sitio = Acceso::findOrFail($id);
        $sitio->status = true;
        $sitio->autorizo = Auth::guard('admin')->user()->nombre;
        $sitio->save();

        return back()->with('sitio_autorizado', 'El sitio fue autorizado');


    }



    public function desautoriza_sitio($id){

        $sitio = Acceso::findOrFail($id);
        $sitio->status = false;
        $sitio->autorizo = Auth::guard('admin')->user()->nombre;
        $sitio->save();

        return back()->with('sitio_desautorizado', 'El sitio fue desautorizado');


    }


    public function autoriza_sitio_jefe($id){

        $sitio = Acceso::findOrFail($id);
        $sitio->status = true;
        $sitio->autorizo = Auth::guard('admin')->user()->nombre;
        $sitio->save();

        return back()->with('acceso_autorizado', 'El sitio fue autorizado');


    }




    public function desautoriza_sitio_jefe($id){

        $sitio = Acceso::findOrFail($id);
        $sitio->status = false;
        $sitio->autorizo = Auth::guard('admin')->user()->nombre;
        $sitio->save();

        return back()->with('acceso_desautorizado', 'El sitio fue desautorizado');


    }






    public function autoriza_software_jefe($id){

        $software = Acceso::findOrFail($id);
        $software->status = true;
        $software->autorizo = Auth::user()->name;
        $software->save();


        return back()->with('sofacceso_autorizado', 'El software se autorizo!');
    
    }


    public function desautoriza_software_jefe($id){

        $software = Acceso::findOrFail($id);
        $software->status = false;
        $software->autorizo = Auth::user()->name;
        $software->save();

        return back()->with('sofacceso_desautorizado', 'El software se desautorizo!');

    }










    public function ver_permisos_jefe(){

        $softwares = Acceso::where('id_jefe', Auth::user()->id)->where('tipo', 'Sitio')->get();
        $sitios = Acceso::where('id_jefe', Auth::user()->id)->where('tipo', 'Software')->get();


        
        return view('jefes.perfil', compact('softwares', 'sitios'));

    }












}
