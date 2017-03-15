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
      $tratamiento=Tratamiento::All();
      return view('Tratamiento.index', array('paciente'=>$paciente, 'id'=>$id, 'tratamiento'=>$tratamiento) );
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
        $ficha=Ficha::where('paciente_id','=',$id)->first();
        $proce=\DB::connection()->getSchemaBuilder()->getColumnListing("Procedimiento");

      foreach ($proce as $key => $proc) {
        if($key!=0){

          $pro[$proc]=str_replace('_',' ',$proc);

        }

      }



        $insumos = array(
          "Alginmax"=>"Alginmax",
          "Alginkid"=>"Alginkid",
          "Alginplus_Tropical"=>"Alginplus Tropical",
          "Servilletas_Dentales"=>"Servilletas Dentales",
          "Eyector_Saliva"=>"Eyector de saliva",
          "Manga_Esterilizacion"=>"Manga de esterilización",
          "Tórula_Algodon"=>"Tórula de algodón");

        return view ('Tratamiento.nuevo',array('paciente'=>$paciente, 'id'=>$id, 'ficha'=>$ficha, 'insumos'=>$insumos,'pro'=>$pro) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TratamientoCreateRequest $request )
    {

         Tratamiento::create($request->All() );
         $id1=$request->paciente_id;
         return redirect('Tratamiento/'.$id1);
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
    public function edit($id,$id2)
    {

        $trat=Tratamiento::find($id2);
        $paciente=Paciente::where('rut','=',$id)->first();
        $ficha=Ficha::where('paciente_id','=',$id)->first();
        $insumos = array(
          "Alginmax"=>"Alginmax",
          "Alginkid"=>"Alginkid",
          "Alginplus_Tropical"=>"Alginplus Tropical",
          "Servilletas_Dentales"=>"Servilletas Dentales",
          "Eyector_Saliva"=>"Eyector de saliva",
          "Manga_Esterilizacion"=>"Manga de esterilización",
          "Tórula_Algodon"=>"Tórula de algodón");
          $proce=\DB::connection()->getSchemaBuilder()->getColumnListing("Procedimiento");

        foreach ($proce as $key => $proc) {
          if($key!=0){

            $pro[$proc]=str_replace('_',' ',$proc);

          }

        }
        return view('Tratamiento.edit', array('trat'=>$trat, 'paciente'=>$paciente, 'id'=>$id,'ficha'=>$ficha,'insumos'=>$insumos,'pro'=>$pro) );

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
        //dd($request->all());
        $tra=Tratamiento::find($id);
        $input=$request->all();
        $tra->fill($input)->save();
      

        return redirect('Tratamiento/'.$request->paciente_id);
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
