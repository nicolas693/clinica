<?php

namespace clinica\Http\Controllers\Alumnos;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;

class AlumnosController extends Controller
{
    //
    public function alumno()
    {
        return view('Alumno/alumno');
    }
    public function access()
    {
        return view('Alumno/access');
    }
    public function reports()
    {
        return view('Alumno/reports');
    }
}
