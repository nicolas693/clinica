<?php

namespace clinica\Http\Controllers\Ficha;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Paciente;
use clinica\Models\Paciente\Clinica;
use clinica\Models\Alumnos\Alumnos;
use clinica\Models\Docente\Docente;
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
        return view('Ficha/index')->with('paciente',$paciente)->with('id',$id);
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
    public function store(FichaCreateRequest $request, $id)
    {
      dd($request->All() );
      Ficha::create($request->All());
      return redirect('Ficha',$id);
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
    public function nueva($id)
    {
        $paciente=Paciente::where('rut','=',$id)->first();
        return view('Ficha/nueva')->with('paciente',$paciente)->with('id',$id);
        //return view('Ficha/nueva');->with('paciente',$paciente);
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

        $procedimientos = array(
            "Apicectomía"=>"Apicectomía",
            "Blanqueamiento dental"=>"Blanqueamiento dental",
            "Empaste"=>"Empaste",
            "Endodoncia"=>"Endodoncia",
            "Exodoncia"=>"Exodoncia",
            "Explorador Dental"=>"Explorador Dental",
            "Gingivectomía"=>"Gingivectomía",
            "Gingivoplastía"=>"Gingivoplastía",
            "Higiene Bucodental"=>"Higiene Bucodental",
            "Implante Dental"=>"Implante Dental",
            "Limpieza Dental"=>"Limpieza Dental",
            "Ostectomía"=>"Ostectomía",
            "Remineralización dental"=>"Remineralización dental",
            "Sitio/Estado"=>"Sitio/Estado",
            "Tartrectomía"=>"Tartrectomía",
            "Técnica de elevación del colgajo"=>"Técnica de elevación del colgajo",
            "Técnica de elevación del seno maxilar"=>"Técnica de elevación del seno maxilar",
            "Técnica de regeneración ósea guiada"=>"Técnica de regeneración ósea guiada",
            "Terapia de fluoruro"=>"Terapia de fluoruro");

            $insumos = array(
              "Alginmax"=>"Alginmax",
              "Alginkid"=>"Alginkid",
              "Alginplus Tropical"=>"Alginplus Tropical",
              "Servilletas Dentales"=>"Servilletas Dentales",
              "Eyector de saliva"=>"Eyector de saliva",
              "Manga de esterilización"=>"Manga de esterilización",
              "Tórula de algodón"=>"Tórula de algodón");


        return view('Ficha.ficha', array('paciente'=>$paciente, 'id'=>$id, 'alumno'=>$alumno,
        'docente'=>$docente, 'edad'=>$edad, 'procedimientos'=>$procedimientos, 'insumos'=>$insumos) );
        //return view('Ficha.ficha')->with('paciente',$paciente)->with('id',$id)->with('alumno',$alumno)->with('docente',$docente)->with('edad',$edad);
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
