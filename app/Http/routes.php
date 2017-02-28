<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('template', function () {
    return view('template');
});





Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('usuarios', [
    'as' => 'usuarios',    'uses' => 'UsuariosController@index'
]);

Route::get('equipos', [
    'as' => 'equipos',    'uses' => 'EquiposController@index'
]);

Route::get('asignaciones', [
    'as' => 'asignaciones',    'uses' => 'AsignacionesController@index'
]);

Route::get('historial', [
    'as' => 'historial',    'uses' => 'HistorialController@index'
]);

Route::get('ajustes', [
    'as' => 'ajustes',    'uses' => 'AjustesController@index'
]);









Route::resource('usuarios_json','UsuariosController@json_usuarios');
Route::resource('usuarios','UsuariosController');

Route::resource('equipos_json','EquiposController@json_equipos');
Route::resource('equipos','EquiposController');

Route::resource('asignaciones_json','AsignacionesController@json_asignaciones');
Route::resource('asignaciones','AsignacionesController');

Route::resource('historial_json','HistorialController@json_historial');
Route::resource('historial','HistorialController');

Route::resource('ajustes_json','AjustesController@json_ajustes');
Route::resource('ajustes','AjustesController');



