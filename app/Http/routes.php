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




Route::group(['middleware' => ['web']], function () {
    //




          Route::auth();

          Route::get('/home', 'HomeController@index');



          route::get('dashboards','DashboardController@index');


          route::resource('Clinica','Clinicas\ClinicasController');

            route::get('Docente/mostrar','Docentes\DocentesController@mostrar');
          route::resource('Docente','Docentes\DocentesController');


          route::resource('Paciente','Pacientes\PacientesController');


            route::get('Alumno/mostrar/{id}','Alumnos\AlumnosController@mostrar');
          route::resource('Alumno','Alumnos\AlumnosController');
          route::resource('User','User\UserController');
          route::resource('Admin','Admin\AdminController');
          route::resource('Ficha','Ficha\FichaController');





});





//route::get('Paciente','Pacientes\PacientesController@index');
