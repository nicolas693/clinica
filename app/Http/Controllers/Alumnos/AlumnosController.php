<?php

namespace clinica\Http\Controllers\Alumnos;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Requests\Alumno\AlumnoCreateRequest;
use clinica\Http\Requests\Alumno\AlumnoUpdateRequest;
use clinica\Http\Controllers\Controller;
use clinica\Models\Alumnos\Alumnos;
use clinica\Models\Paciente\Clinica;
use clinica\Models\Asignatura\Asignatura;
use clinica\Models\Paciente\Paciente;
use clinica\User;
use Auth;
use Illuminate\Support\Facades\Hash;





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
      $id=User::max('id', 'desc')+1;

      $user['id']=$id;
      $user['name']=$request->Nombre.' '.$request->Paterno.' '.$request->Materno;
      $user['email']=$request->email;
      $rut=$request->alumno_id;
      $rut=substr($rut,0,-2);
      $input=$request->all();
      $input['user_id']=$id;



      $user['password']=Hash::make($rut);
      $user['idrol']=3;

      $user['rut']=$request->alumno_id;

      User::create($user);



      Alumnos::create($input);

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
      $alumno=Alumnos::find($id);
      $asignatura =Asignatura::lists('nombre','id');
      $clinica = Clinica::lists('Nombre_Clinica','id_Clinica');
        return view('Alumnos.edit')->with('clinica',$clinica)->with('asignatura',$asignatura)->with('alumno',$alumno);
    }

    public function editU($rut,$id)
    {

        $alumno=Alumnos::find($rut);
        $input=$alumno->all();
        $alumno['user_id']=null;
        $alumno->save();
        $alumno=Alumnos::find($rut);

        $asignatura =Asignatura::lists('nombre','id');
        $clinica = Clinica::lists('Nombre_Clinica','id_Clinica');
          return view('Alumnos.editU')->with('clinica',$clinica)->with('asignatura',$asignatura)->with('alumno',$alumno);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoUpdateRequest $request, $id)
    {
      $al=Alumnos::find($id);
      $input=$request->all();

      $al->fill($input)->save();
      return redirect('/Docente');
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
      $user=Auth::user();
      $alumno=Alumnos::where('user_id','=',$user->id)->first();
      $paciente=Paciente::where('alumno_id','=',$alumno->alumno_id)->where('clinica_id','=',$id)->get();

      return view('Alumnos.mostrar')->with('paciente',$paciente)->with('id',$id);
    }


    public function alta($id)
    {
        $al=Alumnos::find($id);
        if($al->activo==false){
            Alumnos::where('alumno_id', $id)->update(array('activo' => 1));
        }

        else {
            Alumnos::where('alumno_id', $id)->update(array('activo' => 0));
        }


        return redirect('/Docente');
    }
}
