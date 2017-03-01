<?php

namespace clinica\Http\Controllers\Docentes;

use Illuminate\Http\Request;

use clinica\Http\Requests\Docente\DocenteCreateRequest;
use clinica\Http\Requests\Docente\DocenteUpdateRequest;
use clinica\Http\Controllers\Controller;
use clinica\Models\Alumnos\Alumnos;
use clinica\Models\Docente\Docente;
use clinica\Models\Asignatura\Asignatura;
use clinica\Models\Paciente\Paciente;


class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumnos::all();
        return view('Docente.index')->with('alumnos',$alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignatura =Asignatura::lists('nombre','id');
        return view('Docente.create', array('asignatura'=>$asignatura));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocenteCreateRequest $request)
    {
      Docente::create($request->all());
      return redirect('/Admin');
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
    {   $docente=Docente::find($id);
        $asignatura =Asignatura::lists('nombre','id');
        return view('Docente.edit')->with('docente',$docente)->with('asignatura',$asignatura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocenteUpdateRequest $request, $id)
    {
      $do=Docente::find($id);
      $input=$request->all();
      $do->fill($input)->save();
      return redirect('/Admin');
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

    public function mostrar()
    {
      $alumno=Alumnos::all();
      $asignatura=Asignatura::all();
      return view('Docente/mostrar', array('alumno'=>$alumno, 'asignatura'=>$asignatura ) );
    }

    public function evaluar($id){
      $alumnos=Alumnos::where('alumno_id','=',$id)->first();
      $asignatura=Asignatura::all();
      $pacientes=Paciente::where('alumno_id','=',$id)->get()->pluck('rut', 'Nombre', 'Paterno');;

       return view('Docente/evaluar', array('alumnos'=>$alumnos, 'asignatura'=>$asignatura,
      'pacientes'=>$pacientes ) );
    }


    public function storeAlumno(Request $request){
      Alumnos::create($request->only('Calificacion', 'Observaciones', 'PacienteEvaluado') );
      return redirect('/Docente/mostrar');
    }

}
