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
    Route::resource('User','User\UserController');





    Route::get('/odo', function () {
    return view('Odontograma/index');
});
  Route::group(['middleware' => ['auth','Admin']], function(){
    route::get('/Admin','Admin\AdminController@index');
    route::get('/Admin/docente', 'Admin\AdminController@docente');
    route::get('/Docente/create','Docentes\DocentesController@create');
    route::resource('Docente','Docentes\DocentesController',['only' => 'store']);
});



  route::group(['middleware' => ['auth','Docente']], function(){
    route::get('/Docente','Docentes\DocentesController@index');
    route::get('Docente/mostrar','Docentes\DocentesController@mostrar');
    route::get('Docente/evaluar/{id}','Docentes\DocentesController@evaluar');
    route::resource('Alumno','Alumnos\AlumnosController',['only' => ['store','create']]);
});



  route::group(['middleware' => ['auth','Alumno']], function(){
    route::get('Alumno/mostrar/{id}',['as' => 'Alumno.mostrar', 'uses' => 'Alumnos\AlumnosController@mostrar']);
    route::get('Alumno/mostrar/{id}/Paciente/create',[
      'as' => 'Paciente.create', 'uses' => 'Pacientes\PacientesController@create']);
    route::get('Alumno','Alumnos\AlumnosController@index');

    route::resource('Problema','Odontograma\ProblemaController');
    route::resource('Odontograma','Odontograma\OdontogramaController',['only' => 'store']);




    route::get('Ficha/{id}/Odontograma/{id2}',['as'=> 'Odontograma.show' , 'uses' => 'Odontograma\OdontogramaController@show']);
    route::get('Ficha/{id}/Odontograma',['as'=> 'Odontograma.index' , 'uses' => 'Odontograma\OdontogramaController@index']);
    route::get('Ficha/{id}',['as'=> 'Ficha.index' , 'uses' => 'Ficha\FichaController@index']);
    route::get('Ficha/{id}/nueva','Ficha\FichaController@nueva');
    route::get('Ficha/antigua','Ficha\FichaController@antigua');
    route::get('Ficha/{id}/ficha',['as'=>'Ficha.ficha', 'uses' => 'Ficha\FichaController@ficha' ]);

    Route::get('Paciente/alta/{id}', 'Pacientes\PacientesController@alta');
    route::resource('Paciente','Pacientes\PacientesController',['only' => ['store','edit','show','update']]);


    route::get('Tratamiento/{id}',['as'=> 'Tratamiento.index', 'uses'=> 'Tratamiento\TratamientoController@index']);
    route::get('Tratamiento/nuevo/{id}', [ 'as'=> 'Tratamiento.nuevo', 'uses'=> 'Tratamiento\TratamientoController@nuevo']);
    //route::get('Tratamiento/edit/{id}', ['as'=>'Tratamiento.edit', 'uses'=>'Tratamiento\TratamientoController@edit' ]);
    //route::Store('Tratamiento/nuevo/{id}', 'Tratamiento\TratamientoController@store');
    route::resource('Tratamiento','Tratamiento\TratamientoController',['only' => ['store','edit','show','update']]);



    //route::resource('Tratamiento','Tratamiento\TratamientoController', ['only' => ['store','nuevo'] ]);
    //route::get('Tratamiento/{id}', 'Tratamiento\TratamientoController@index');

});
