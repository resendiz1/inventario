<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketsController extends Controller
{
    public function show(){


        return view('user.perfil_tickets');

    }
}
