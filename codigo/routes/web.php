<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'IndexController@index');
Route::get('index/index', 'IndexController@index');
Route::get('personas/personas', 'PersonasController@personas');
Route::get('vehiculos/vehiculos', 'VehiculosController@vehiculo');
Route::get('informes/informes', 'InformesController@informes');
Route::get('usuarios/usuarios', 'UsuariosController@usuarios');

Route::post('vehiculos', 'VehiculosController@vehiculo');
Route::post('vehiculos/insertar', 'VehiculosController@store');

Route::resource('usuarios', 'UsuariosController');
Route::resource('personas', 'PersonasController');
Route::resource('vehiculos', 'vehiculosController');
Route::resource('parqueos', 'indexController');


