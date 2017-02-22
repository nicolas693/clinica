<?php

namespace clinica\Http\Controllers\Odontograma;

use Illuminate\Http\Request;
use clinica\Models\Odontograma\Problema;
use clinica\Models\Paciente\Paciente;
use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;

class ProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


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

      $pro=Problema::find($id);
      $input=$request->all();
      $i=32;
      $ii=1;

      foreach($input as $key => $mainrow){
          if($input[$key]=="on"){
            $input[$key]=1;
          }
      }

      while($i<$id){
        $ii++;
        $i=$i+32;
      }

      $paciente=Paciente::where('Odontograma_id','=',$ii)->first();





      $pro->fill($input)->save();
      return redirect('/Ficha/'.$paciente->rut.'/Odontograma');


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
