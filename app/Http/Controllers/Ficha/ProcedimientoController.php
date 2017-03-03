<?php

namespace clinica\Http\Controllers;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Models\Ficha\Ficha;
use clinica\Models\Ficha\Procedimiento;

class ProcedimientoController extends Controller
{

    public function store(Request $request){
              Procedimiento::create($request->All() );
    }

}
