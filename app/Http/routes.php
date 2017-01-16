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


Route::group(['middleware' => ['auth','Admin']], function(){
  route::get('/Admin','Admin\AdminController@index');
  route::get('/Docente/create','Docentes\DocentesController@create');
  route::resource('Docente','Docentes\DocentesController',['only' => 'store']);
});


   route::group(['middleware' => ['auth','Docente']], function(){
   route::get('/Docente','Docentes\DocentesController@index');
   route::get('Docente/mostrar','Docentes\DocentesController@mostrar');
   route::resource('Alumno','Alumnos\AlumnosController',['only' => ['store','create']]);
});


  route::group(['middleware' => ['auth','Alumno']], function(){
  route::get('Alumno/mostrar/{id}','Alumnos\AlumnosController@mostrar');
  route::get('Alumno','Alumnos\AlumnosController@index');
  route::get('Paciente/alta/{id}', 'Pacientes\PacientesController@alta');
  route::resource('Paciente','Pacientes\PacientesController',['only' => ['store','create','edit','show','update']]);
  route::get('Ficha','Ficha\FichaController@index');
  route::get('Ficha/nueva','Ficha\FichaController@nueva');
  //route::resource('Ficha','Ficha\FichaController',['only' => ['store','create','edit','show','update']]);
  route::resource('Tratamiento','Tratamiento\TratamientoController');
});
//route::get('Paciente','Pacientes\PacientesController@index');
