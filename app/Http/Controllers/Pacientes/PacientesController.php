<?php

namespace clinica\Http\Controllers\Pacientes;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Paciente;
use clinica\Models\Paciente\Clinica;
use clinica\Models\Alumnos\Alumnos;
use clinica\Models\Odontograma\Odontograma;
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
        $genero = array( 'Hombre'=>'Hombre', 'Mujer'=>'Mujer');
        $regiones = array( 'XV de Arica y Parinacota'=>'XV de Arica y Parinacota', 'I de Tarapacá'=>'I de Tarapacá',
        'II de Antofagasta'=>'II de Antofagasta', 'III de Atacama'=>'III de Atacama', 'IV de Coquimbo'=>'IV de Coquimbo',
        'V de Valparaíso'=>'V de Valparaíso', "VI del Libertador General Bernardo O'Higgins"=>"VI del Libertador General Bernardo O'Higgins",
        'VII del Maule'=>'VII del Maule', 'VIII del Bío Bío'=>'VIII del Bío Bío', 'IX de la Araucanía'=>'IX de la Araucanía',
        'XIV de los Ríos'=>'XIV de los Ríos' , 'X de los Lagos'=>'X de los Lagos',
        'XI Aisén del General Carlos Ibáñez del Campo'=>'XI Aisén del General Carlos Ibáñez del Campo',
        'XII de Magallanes y Antártica Chilena'=>'XII de Magallanes y Antártica Chilena', 'Metropolitana de Santiago'=>'Metropolitana de Santiago' );
        $date = Carbon::now();
        $date=$date->subDay()->format('d/m/y');
        $paciente = Clinica::lists('Nombre_Clinica','id_Clinica','alumno_id');
        $ruta=\Route::getCurrentRoute()->getPath();

        return view('Pacientes.create', array('paciente'=>$paciente, 'genero'=>$genero,
        'date'=>$date, 'id'=>$id, 'regiones'=>$regiones));
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


       $request['rut'] = str_replace(' ', '', $request['rut']);
       $request['alta']=true;
       //$request['rut']=substr($request->rut,0,-2);



        //$rut1=substr($request->rut, 0, -2);

        //$array=array("Odontograma_id"=>$rut1);

        //Odontograma::create($array);
        //$aa=Odontograma::orderBy('Odontograma_id', 'desc')->first();
        //dd($aa->Odontograma_id);
         dd($request->All());
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


    public function edit($id)
    {
      $regiones = array( 'XV de Arica y Parinacota'=>'XV de Arica y Parinacota', 'I de Tarapacá'=>'I de Tarapacá',
      'II de Antofagasta'=>'II de Antofagasta', 'III de Atacama'=>'III de Atacama', 'IV de Coquimbo'=>'IV de Coquimbo',
      'V de Valparaíso'=>'V de Valparaíso', "VI del Libertador General Bernardo O'Higgins"=>"VI del Libertador General Bernardo O'Higgins",
      'VII del Maule'=>'VII del Maule', 'VIII del Bío Bío'=>'VIII del Bío Bío', 'IX de la Araucanía'=>'IX de la Araucanía',
      'XIV de los Ríos'=>'XIV de los Ríos' , 'X de los Lagos'=>'X de los Lagos',
      'XI Aisén del General Carlos Ibáñez del Campo'=>'XI Aisén del General Carlos Ibáñez del Campo',
      'XII de Magallanes y Antártica Chilena'=>'XII de Magallanes y Antártica Chilena', 'Metropolitana de Santiago'=>'Metropolitana de Santiago' );
       $genero = array( 'Hombre'=>'Hombre', 'Mujer'=>'Mujer');
       $clinica = Clinica::lists('Nombre_Clinica','id_Clinica');
       $pa= Paciente::find($id);
       return view('Pacientes.edit', array('pa'=>$pa,'clinica'=>$clinica, 'genero'=>$genero, 'regiones'=>$regiones ));
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
        $pa=Paciente::find($id);
        if($pa->alta==false){
            Paciente::where('rut', $id)->update(array('alta' => 1));
        }

        else {
            Paciente::where('rut', $id)->update(array('alta' => 0));
        }
        $pa=Paciente::find($id);
        $pa=$pa->clinica_id;

        return redirect('/Alumno/mostrar/'.$pa);
    }
}
