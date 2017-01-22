<?php

namespace clinica\Http\Controllers\Pacientes;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Paciente;
use clinica\Models\Paciente\Clinica;
use clinica\Models\Alumnos\Alumnos;
use Auth;
use Carbon\Carbon;
use clinica\Http\Requests\Paciente\PacienteCreateRequest;
use clinica\Http\Requests\Paciente\PacienteUpdateRequest;
class PacientesController extends Controller
{

  //  public function __construct(){
    //  $this->middleware('auth');

   //}
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
    public function create($id)
    {
        $genero = ['Hombre','Mujer'];
        $date = Carbon::now();
        $date=$date->subDay()->format('d/m/y');
        $paciente = Clinica::lists('Nombre_Clinica','id_Clinica','alumno_id');

        return view('Pacientes.create')->with('paciente',$paciente)->with('genero',$genero)->with('date',$date)->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(PacienteCreateRequest $request)
     {

       $id_1=Auth::id();
       $alumnos=Alumnos::all();
       foreach ($alumnos as $alu) {
         if($alu->user_id == $id_1){

           $request['alumno_id']=$alu->alumno_id;
         }
       }

       if($request->Genero==0){
         $request['Genero']="Hombre";
       }else{
         $request['Genero']="Mujer";
       }
       $request['rut'] = str_replace(' ', '', $request['rut']);

       $request['alta']=true;
       //$request['rut']=substr($request->rut,0,-2);



         Paciente::create($request->all());

         $id=$request->clinica_id;
         return redirect('/Alumno/mostrar/'.$id);
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

       $genero = ['Hombre','Mujer'];
       $clinica = Clinica::lists('Nombre_Clinica')->prepend('Seleccione la Clinica');
       $pa= Paciente::find($id);
       return view('Pacientes.edit', array('pa'=>$pa,'clinica'=>$clinica))->with('genero',$genero);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteUpdateRequest $request, $id)
    {

      $id_1=Auth::id();
      $alumnos=Alumnos::all();
      foreach ($alumnos as $alu) {
        if($alu->user_id == $id_1){

          $request['alumno_id']=$alu->alumno_id;
        }
      }
      $request['rut'] = str_replace(' ', '', $request['rut']);
      if($request->Genero==0){
        $request['Genero']="Hombre";
      }else{
        $request['Genero']="Mujer";
      }

        $pa= Paciente::find($id);
        $input=$request->all();
        $pa->fill($input)->save();
        $val=$pa->clinica_id;


        return redirect('/Alumno/mostrar/'.$val);
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

    public function alta($id)
    {
        Paciente::where('rut', $id)->update(array('alta' => 0));
        $pa=Paciente::find($id);
        $pa=$pa->clinica_id;

        return redirect('/Alumno/mostrar/'.$pa);
    }
}
