<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicacionesController extends Controller
{
    
    public function show(){
        return view('admin.gestionar_publicaciones');
    }


}
