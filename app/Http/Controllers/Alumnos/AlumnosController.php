<?php

namespace clinica\Http\Controllers\Alumnos;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Alumnos\Alumnos;
use clinica\Models\Paciente\Clinica;
use clinica\Models\Asignatura\Asignatura;
use clinica\Models\Paciente\Paciente;
use clinica\http\Requests\Alumno\AlumnoCreateRequest;


class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

      $clinica=Clinica::all();
      return view('Alumnos/index')->with('clinica',$clinica);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignatura =Asignatura::lists('nombre','id');
        $clinica = Clinica::lists('Nombre_Clinica','id_Clinica');
        return view('Alumnos.create')->with('clinica',$clinica)->with('asignatura',$asignatura);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoCreateRequest $request)
    {
      Alumnos::create($request->only('alumno_id','asignatura_id','Nombre_Alumno','Apellido_Alumno'
      ,'Telefono_Alumno','id_Clinica','user_id' ));
      return redirect('/Docente');
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

    public function mostrar($id)
    {
      $paciente=Paciente::all();
      return view('Alumnos.mostrar')->with('paciente',$paciente)->with('id',$id);
    }
}
