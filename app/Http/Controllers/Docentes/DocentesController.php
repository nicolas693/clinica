<?php

namespace clinica\Http\Controllers\Docentes;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Alumnos\Alumnos;
use clinica\Models\Docente\Docente;
use clinica\Models\Asignatura\Asignatura;


class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Docente.index');
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
    public function store(Request $request)
    {
      $this->validate($request, [
       'id' => ['required','cl_rut'],
       'Nombre' => ['required','min:3','max:20','regex:/^[\pL\s\-]+$/u'],
       'Telefono' => ['required','min:7','max:9','regex:/[0-9]/'],
       'user_id' => ['required','max:7','regex:/[0-9]/'],
     ]);

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

    public function mostrar()
    {
      $alumno=Alumnos::all();
      $asignatura=Asignatura::all();
      return view('Docente/mostrar', array('alumno'=>$alumno, 'asignatura'=>$asignatura ) );
    }

    public function evaluar($id){
      $alumnos=Alumnos::where('alumno_id','=',$id)->first();
      $asignatura=Asignatura::all();
      return view('Docente/evaluar', array('alumnos'=>$alumnos, 'asignatura'=>$asignatura ) );
    }

}
