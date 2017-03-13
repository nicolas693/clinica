<?php

namespace clinica\Http\Controllers\Ficha;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Paciente;
use clinica\Models\Paciente\Clinica;
use clinica\Models\Alumnos\Alumnos;
use clinica\Models\Docente\Docente;
use clinica\Models\Paciente\Ficha;
use clinica\Models\Procedimiento\Procedimiento;
use clinica\User;

use clinica\Http\Requests\Ficha\FichaCreateRequest;
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
        $ficha_exists =Ficha::where('paciente_id','=',$id)->first();
        return view('Ficha/index', array('paciente'=>$paciente, 'id'=>$id,'ficha_exists'=>$ficha_exists ) );
    }

    public function verFicha($id){
      $paciente=Paciente::where('rut','=',$id)->first();
      $ficha_exists =Ficha::where('paciente_id','=',$id)->first();
      return view('Ficha/verFicha', array('paciente'=>$paciente, 'id'=>$id,'ficha_exists'=>$ficha_exists) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FichaCreateRequest $request)
    {
      $mytime = date('d/m/Y');
      $input = $request->except('Fecha_Ingreso');
      $input['Fecha_Ingreso']= $mytime;
      Ficha::create($input);

      $paciente_id=$request->paciente_id;
      return redirect('Ficha/'.$paciente_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $paciente=Paciente::where('rut','=',$id)->first();
      $user=Auth::user();
      $alumno=Alumnos::where('user_id','=',$user->id)->first();
      $docente=Docente::where('asignatura_id','=',$alumno->asignatura_id)->first();
      $fechaA=date('d/m/Y');

      $fechaP=$paciente->Fecha_Nacimiento;
      $fechaP=Carbon::createFromFormat('d/m/Y', $fechaP);
      $fechaP=Carbon::parse($fechaP);
      $fechaP=$fechaP->diffInDays();
      $edad=(int)floor($fechaP/365);

      $ficha=Ficha::where('paciente_id','=',$id)->first();
      return view('Ficha.edit', array('paciente'=>$paciente, 'id'=>$id, 'alumno'=>$alumno,
      'docente'=>$docente, 'edad'=>$edad, 'ficha'=>$ficha) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FichaCreateRequest $request, $id)
    {
      $input = $request->except('Fecha_Ingreso');
      $ficha=Ficha::where('paciente_id','=',$id)->first();
      $ficha->fill($input)->save();
      $paciente_id=$ficha->paciente_id;
      return redirect('Ficha/'.$paciente_id);
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



    public function ficha ($id){
        $paciente=Paciente::where('rut','=',$id)->first();
        $user=Auth::user();
        $alumno=Alumnos::where('user_id','=',$user->id)->first();
        $docente=Docente::where('asignatura_id','=',$alumno->asignatura_id)->first();
        $fechaA=date('d/m/Y');

        $fechaP=$paciente->Fecha_Nacimiento;
        $fechaP=Carbon::createFromFormat('d/m/Y', $fechaP);
        $fechaP=Carbon::parse($fechaP);
        $fechaP=$fechaP->diffInDays();
        $edad=(int)floor($fechaP/365);

        return view('Ficha.ficha', array('paciente'=>$paciente, 'id'=>$id, 'alumno'=>$alumno,
        'docente'=>$docente, 'edad'=>$edad, 'fechaA'=>$fechaA) );
    }



}
