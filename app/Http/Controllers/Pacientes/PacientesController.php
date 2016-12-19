<?php

namespace clinica\Http\Controllers\Pacientes;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Paciente;
use clinica\Models\Paciente\Clinica;
use Carbon\Carbon;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    }
    public function index()
    {
        $paciente=Paciente::all();
        return view('Pacientes/index')->with('paciente',$paciente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::now();
        $paciente = Clinica::lists('Nombre_Clinica','id_Clinica');
        return view('Pacientes.create')->with('paciente',$paciente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Paciente::create($request->all());

        return redirect()->route('Paciente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pa= Paciente::find($id);
        return view('Pacientes.show')->with('pa',$pa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*

    public function edit(Paciente $pa)
    {
       $clinica = Clinica::lists('Nombre_Clinica')->prepend('Seleccioname la Clinica');

        return view('Pacientes.edit',compact('pa'))->with('clinica',$clinica);


    }

    */


    public function edit($id)
    {
       $clinica = Clinica::lists('Nombre_Clinica')->prepend('Seleccioname la Clinica');
       $pa= Paciente::find($id);
       return view('Pacientes.edit', array('pa'=>$pa,'clinica'=>$clinica));

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
        $pa= Paciente::find($id);
        $input=$request->all();
        $pa->fill($input)->save();

        return redirect()->route('Paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pa= Paciente::find($id);

        $pa->delete();

        return redirect()->route('Paciente.index');
    }
}
