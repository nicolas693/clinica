<?php

namespace clinica\Http\Controllers\User;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\User;
use clinica\roluser;

use clinica\Models\Docente\Docente;
use clinica\Models\Alumnos\Alumnos;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=0;
        $user=Auth::user();
        if($user->idrol==2)
        {

          $datos=Docente::all();

          foreach ($datos as $dato)
          {

            if($dato->user_id == $user->id)
            {
              $info=$dato;
            }
          }

        }
        if($user->idrol==3)
        {
          $datos=Alumnos::all();
          foreach ($datos as $dato)
          {
            if($dato->user_id == $user->id)
            {
              $info=$dato;
            }
          }
        }

        if($user->idrol==1){
          $rol=roluser::all();
          return view('User.index')->with('user',$user)->with('rol',$rol);

        }
        else{
          $rol=roluser::all();

          return view('User.index')->with('user',$user)->with('rol',$rol)->with('info',$info);
        }


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

        $user=User::find($id);
        $permisos=roluser::lists('Nombre','idrol');
        unset($permisos[1]);
        
        return view('User.edit')->with('user',$user)->with('permisos',$permisos);
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
      $us=User::find($id);
      $input=$request->all();
      $us->fill($input)->save();
      return redirect('/Admin');
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
