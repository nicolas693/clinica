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



Route::group(['middleware' => ['web']], function () {
    //


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


route::get('panel','Pacientes\PacientesController@panel');

route::get('dashboards','DashboardController@index');
route::get('product','DashboardController@index');

route::get('alumno','Alumnos\AlumnosController@alumno');
route::get('access','Alumnos\AlumnosController@access');
route::get('reports','Alumnos\AlumnosController@reports');


});
