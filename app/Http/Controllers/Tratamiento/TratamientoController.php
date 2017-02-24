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
      return view('Tratamiento.index')->with('paciente',$paciente)->with('id',$id)->with('tratamiento',$tratamiento);
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
        dd($id);
        return view ('Tratamiento.nuevo')->with('paciente',$paciente)->with('id',$id)->with('ficha',$ficha);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TratamientoCreateRequest $request )
    {
         //Tratamiento::create($request->only('Diente', 'Costo', 'nProfe', 'AccionR', 'Fecha') );
         //$paciente=Paciente::where('rut','=',$id)->first();
         //$input = $request->only(['Diente','Costo','nProfe','AccionR','Fecha']);

         Tratamiento::create($request->All() );
         $id1=$request->paciente_id;
         //Tratamiento::create($request->All() );
         //$input = $request->only(['Diente', 'Costo', 'Profesor', 'AccionR', 'Fecha']);

         //return view('Tratamiento.index')->with('id1',$id1);
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
    public function edit($id)
    {
        $trat=Tratamiento::find($id);
        $paciente=Paciente::where('rut','=',$id)->first();
        return view('Tratamiento.edit', array('trat'=>$trat, 'paciente'=>$paciente) )->with('id',$id);
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
        $input = $request->only('Diente','Costo','nProfe','AccionR','Fecha');
        Tratamiento::create($input);
        return redirect('Tratamiento/'.$id);
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
