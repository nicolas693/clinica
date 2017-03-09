<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('/', function () {
    return view('welcome');
});
    Route::auth();
    Route::get('/home', 'HomeController@index');
    route::resource('User','User\UserController@index',['only' => 'index']);




  Route::group(['middleware' => ['auth','Admin']], function(){
    route::get('/Admin','Admin\AdminController@index');
    route::resource('Docente','Docentes\DocentesController',['only' => ['store','create','edit','update']]);
      route::resource('User','User\UserController',['except' => 'index']);

      route::get('Docente/{rut}/edit/{id}',['as' => 'Docente.editU', 'uses' => 'Docentes\DocentesController@editU']);


});



  route::group(['middleware' => ['auth','Docente']], function(){
    route::get('/Docente', 'Docentes\DocentesController@index' );
    route::get('Docente/mostrar','Docentes\DocentesController@index');
    route::resource('Alumno','Alumnos\AlumnosController',['only' => ['store','create','edit','update']]);
    route::get('Docente/evaluar/{id}','Docentes\DocentesController@evaluar');
    route::get('Docente', ['as'=>'Docente.storeAlumno', 'uses'=>'Docentes\DocentesController@storeAlumno' ]);

    route::get('Alumno/{rut}/edit/{id}',['as' => 'Alumnos.editU', 'uses' => 'Alumnos\AlumnosController@editU']);



});



  route::group(['middleware' => ['auth','Alumno']], function(){
    route::get('Alumno/mostrar/{id}',['as' => 'Alumno.mostrar', 'uses' => 'Alumnos\AlumnosController@mostrar']);
    route::get('Alumno/mostrar/{id}/Paciente/create',['as' => 'Paciente.create', 'uses' => 'Pacientes\PacientesController@create']);
    route::get('Paciente/alta/{id}',['as' => 'Paciente.alta', 'uses' => 'Pacientes\PacientesController@alta']);


    route::get('Alumno','Alumnos\AlumnosController@index');

    route::resource('Problema','Odontograma\ProblemaController');
    route::resource('Odontograma','Odontograma\OdontogramaController',['only' => 'store']);




    route::get('Ficha/{id}/Odontograma/{id2}',['as'=> 'Odontograma.show' , 'uses' => 'Odontograma\OdontogramaController@show']);
    route::get('Ficha/{id}/Odontograma',['as'=> 'Odontograma.index' , 'uses' => 'Odontograma\OdontogramaController@index']);
    route::get('Ficha/{id}',['as'=> 'Ficha.index' , 'uses' => 'Ficha\FichaController@index']);
    route::get('Ficha/{id}/editar',['as'=>'Ficha.edit','uses'=>'Ficha\FichaController@edit']);
    route::get('Ficha/{id}/ficha',['as'=>'Ficha.ficha', 'uses' => 'Ficha\FichaController@ficha' ]);
    route::resource('Ficha','Ficha\FichaController',['only'=>'store'] );

    route::get('Procedimiento','Ficha\ProcedimientoController@store');
    route::post('Procedimiento','Ficha\ProcedimientoController@store');
    route::resource('Procedimiento', 'Ficha\ProcedimientoController', ['only'=>'store']);

  
    route::resource('Paciente','Pacientes\PacientesController',['only' => ['store','edit','show','update']]);


    route::get('Tratamiento/{id}',['as'=> 'Tratamiento.index', 'uses'=> 'Tratamiento\TratamientoController@index']);
    route::get('Tratamiento/nuevo/{id}', [ 'as'=> 'Tratamiento.nuevo', 'uses'=> 'Tratamiento\TratamientoController@nuevo']);
    //route::post('Tratamiento', 'Tratamiento\TratamientoController@store');
    route::resource('Tratamiento','Tratamiento\TratamientoController',['only' => ['store','edit','show','update']]);


});
