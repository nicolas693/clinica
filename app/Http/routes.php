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
  route::get('/Docente/create','Docentes\DocentesController@create');
  route::resource('Docente','Docentes\DocentesController',['only' => 'store']);
});


   route::group(['middleware' => ['auth','Docente']], function(){
   route::get('/Docente','Docentes\DocentesController@index');
   route::get('Docente/mostrar','Docentes\DocentesController@mostrar');
   route::resource('Alumno','Alumnos\AlumnosController',['only' => ['store','create']]);
});


  route::group(['middleware' => ['auth','Alumno']], function(){
    route::get('Alumno/mostrar/{id}',['as' => 'Alumno.mostrar', 'uses' => 'Alumnos\AlumnosController@mostrar']);

  route::get('Alumno/mostrar/{id}/Paciente/create',[
    'as' => 'Paciente.create', 'uses' => 'Pacientes\PacientesController@create'
]);

route::get('Ficha/{id}/Odontograma/{id2}',['as'=> 'Odontograma.show' , 'uses' => 'Odontograma\OdontogramaController@show']);
route::get('Ficha/{id}/Odontograma',['as'=> 'Odontograma.index' , 'uses' => 'Odontograma\OdontogramaController@index']);

  route::get('Alumno','Alumnos\AlumnosController@index');
  Route::get('Paciente/alta/{id}', 'Pacientes\PacientesController@alta');

  route::resource('Paciente','Pacientes\PacientesController',['only' => ['store','edit','show','update']]);
  //route::get('Ficha','Ficha\FichaController@index');
  route::get('Ficha/{id}',['as'=> 'Ficha.index' , 'uses' => 'Ficha\FichaController@index']);
  route::get('Ficha/nueva','Ficha\FichaController@nueva');
  route::get('Ficha/antigua','Ficha\FichaController@antigua');
  //route::resource('Ficha','Ficha\FichaController',['only' => ['store','create','edit','show','update']]);
  route::resource('Tratamiento','Tratamiento\TratamientoController');
});
//route::get('Paciente','Pacientes\PacientesController@index');
