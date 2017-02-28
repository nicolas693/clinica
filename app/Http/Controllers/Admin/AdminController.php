<?php

namespace clinica\Http\Controllers\Admin;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Docente\Docente;
use clinica\Models\Asignatura\Asignatura;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Admin/index');
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
        //
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

    public function docente(){
      $docente=Docente::all();
      $asignatura=Asignatura::all();
      //$asignatura=Asignatura::where('asignatura','=',$docente->asignatura_id)->first();
      return view('Admin.docente', array('docente'=>$docente, 'asignatura'=>$asignatura));//->with('asignatura',$asignatura);
    }
}
