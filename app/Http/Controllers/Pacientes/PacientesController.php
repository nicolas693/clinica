<?php

namespace clinica\Http\Controllers\Pacientes;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;

class PacientesController extends Controller
{
    public function panel(){
    	return view ('Pacientes/panel');
    }

    public function acces(){
    	return view ('Pacientes/acces');
    }

    public function report(){
    	return view ('Pacientes/report');
    }
}
