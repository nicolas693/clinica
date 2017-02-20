<?php

namespace clinica\Http\Controllers\Tratamiento;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Paciente;
use clinica\Models\Paciente\Ficha;
use clinica\Models\Tratamiento\Tratamiento;
use clinica\Http\Requests\Tratamiento\TratamientoCreateRequest;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $paciente=Paciente::where('rut','=',$id)->first();
      $request['paciente_id']=$paciente->paciente_id;
      return view('Tratamiento.index')->with('paciente',$paciente)->with('id',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente=Paciente::where('rut','=',$id)->first();
        return view ('Tratamiento.create')->with('paciente',$paciente)->with('id',$id);
    }

    public function nuevo($id){

      $paciente=Paciente::where('rut','=',$id)->first();
      return view ('Tratamiento.nuevo')->with('paciente',$paciente)->with('id',$id);
      //return "Hello World!";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TratamientoCreateRequest $request)
    {
         $input = $request->only(['Diente', 'Costo', 'Profesor', 'AccionR', 'Fecha']);
         $id= $request->paciente_id;
         return view('Tratamiento.index')->with('id',$id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
