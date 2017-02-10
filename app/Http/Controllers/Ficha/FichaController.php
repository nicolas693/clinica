<?php

namespace clinica\Http\Controllers\Ficha;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Ficha;
use clinica\Models\Paciente\Paciente;
use Auth;
use Carbon\Carbon;


class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $paciente=Paciente::where('rut','=',$id)->first();
        return view('Ficha/index')->with('paciente',$paciente)->with('id',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $fi = Ficha::find($id);
      return view('Ficha.show')->with('ficha',$fi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function nueva()
    {
        //$paciente=Paciente::find($id);
        return view('Ficha/nueva');//->with('paciente',$paciente);
    }
    public function antigua()
    {
        return view('Ficha/antigua');
    }
    public function Procedimientos($Procedimientos)
    {
        $Procedimientos = array(
            "Apicectomía",
            "Blanqueamiento dental",
            "Empaste",
            "Endodoncia",
            "Exodoncia",
            "Explorador Dental",
            "Gingivectomía",
            "Gingivoplastía",
            "Higiene Bucodental",
            "Implante Dental",
            "Limpieza Dental",
            "Ostectomía",
            "Remineralización dental",
            "Sitio/Estado",
            "Tartrectomía",
            "Técnica de elevación del colgajo",
            "Técnica de elevación del seno maxilar",
            "Técnica de regeneración ósea guiada",
            "Terapia de fluoruro");
    }
}
