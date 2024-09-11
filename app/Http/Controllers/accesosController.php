<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acceso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class accesosController extends Controller
{
    public function show(){

        $sitios = Acceso::where('tipo', 'sitio')->get();
        $software = Acceso::where('tipo', 'software')->get();

        return view('user.control_accesos', compact('sitios', 'software'));
    }

    public function show_admin($id){

        $user = User::findOrFail($id);
        $sitios = $user->accesos()->where('tipo', 'sitio')->get();
        $software = $user->accesos()->where('tipo', 'software')->get();

        return view('admin.control_accesos', compact('sitios', 'software'));
    }



    public function solicita_sitio(){

        $acceso = new Acceso();

        $acceso->nombre = request('sitio');
        $acceso->user_id = Auth::user()->id;
        $acceso->tipo = 'Sitio';
        $acceso->justificacion = request('justificacion');

        $acceso->save();

        return back()->with('solicitado', 'El acceso fue solicitado');

    }



    public function solicita_software(){

        $acceso = new Acceso();
        $acceso->nombre = request('software');
        $acceso->user_id = Auth::user()->id;
        $acceso->tipo = 'Software';
        $acceso->justificacion = request('justificacion');

        $acceso->save();


        return back()->with('solicitado', 'El acceso fue solicitado');

    }


}
