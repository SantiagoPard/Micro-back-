<?php
use App\Http\Controllers\EstudianteController;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// /* 
// RoutasEstudiantes
//  */
$router->get('estudiantes','EstudianteController@index');
$router->get('estudiantes/{codigo}','EstudianteController@show');
$router->post('estudiantes','EstudianteController@store');
$router->put('estudiantes/{codigo}','EstudianteController@update');
$router->delete('estudiantes/{codigo}','EstudianteController@destroy');

// /* 
// RutasActividades
// */

$router->get('actividades/{codigo}','ActividadController@show');
$router->get('actividad/{id}','ActividadController@showAct');
$router->post('actividades','ActividadController@store');
$router->put('actividades/{id}','ActividadController@update');
$router->delete('actividades/{id}','ActividadController@destroy');