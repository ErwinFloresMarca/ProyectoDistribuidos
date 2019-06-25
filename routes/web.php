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

Route::get('/', function () {
    return view('index');
});
//Inicio Parte de Yessi
//parte de persona 
Route::get('persona','PersonaController@index')->name('persona.index');
Route::get('persona/nuevo','PersonaController@create')->name('persona.nuevo');
Route::post('persona/guardar','PersonaController@store')->name('persona.guardar');
Route::get('persona/edit/{id}','PersonaController@edit')->name('persona.edit');
Route::post('persona/edit' , 'PersonaController@update')->name('persona.actualizar');
Route::get('persona/eliminar/{id}','PersonaController@destroy');
//parte de administrador 
Route::get('administrador' , 'AdministradorController@index')->name('administrador.index');
Route::get('administrador/nuevo/{id}' , 'AdministradorController@create')->name('administrador.nuevo');
Route::get('administrador/edit/{id}' , 'AdministradorController@edit')->name('administrador.edit');
Route::post('administrador/edit' , 'AdministradorController@update')->name('administrador.actualizar');
Route::post('administrador/guardar' , 'AdministradorController@store')->name('administrador.guardar');
Route::get('administrador/eliminar/{id}' , 'AdministradorController@destroy');
//parte de arbitro 
Route::get('arbitro' , 'ArbitroController@index') -> name('arbitro.index');
Route::get('arbitro/nuevo/{id}','ArbitroController@create') ->name('arbitro.nuevo');
Route::get('arbitro/edit/{id}' , 'ArbitroController@edit')->name('arbitro.edit');
Route::post('arbitro/guardar' , 'ArbitroController@store') -> name('arbitro.guardar');
Route::get('arbitro/eliminar/{id}' , 'ArbitroController@destroy') ;
//Fin Parte de Yessi

//Inicio Parte de Erwin
Route::get('/fixture','FixtureController@index')->name('fixture.index');
Route::get('/fixture/edit/{id}','FixtureController@edit')->name('fixture.edit');

Route::get('/fixture/nuevo','FixtureController@create')->name('fixture.nuevo');
Route::post('/fixture/guardar','FixtureController@store')->name('fixture.guardar');
Route::post('/fixture/eliminar','FixtureController@destroy')->name('fixture.eliminar');
//Fin Parte de Erwin

//Inicio Parte de Marian
Route::get('delegado','DelegadoController@index')->name('delegado.index');

Route::get('delegado/nuevo/{id}','DelegadoController@create')->name('delegado.create');
Route::post('delegado/guardar','DelegadoController@store')->name('delegado.guardar');

Route::get('delegado/editar/{id}','DelegadoController@edit')->name('delegado.editar');
Route::post('delegado/editar','DelegadoController@update')->name('delegado.actualizar');

Route::get('delegado/eliminar/{id}','DelegadoController@destroy')->name('delegado.eliminar');

Route::get('equipo','EquipoController@index')->name('equipo.index');

Route::get('equipo/nuevo','EquipoController@create')->name('equipo.crear');
Route::post('equipo/guardar','EquipoController@store')->name('equipo.guardar');

Route::get('equipo/editar/{id}','EquipoController@edit')->name('equipo.editar');
Route::post('equipo/actualizar','EquipoController@update')->name('equipo.actualizar');
//Fin Parte de Marian
