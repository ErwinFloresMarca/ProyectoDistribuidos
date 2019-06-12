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
    return view('welcome');

});
//Inicio Parte de Yessi
Route::get('persona','PersonaController@index')->name('persona.index');
Route::get('persona/nuevo','PersonaController@create')->name('persona.nuevo');
Route::post('persona/guardar','PersonaController@store')->name('persona.guardar');
Route::get('persona/edit/{id}','PersonaController@edit')->name('persona.edit');
Route::post('persona/eliminar/{id}','PersonaController@destroy')->name('persona.eliminar');

//Fin Parte de Yessi

//Inicio Parte de Erwin
Route::get('/fixture','FixtureController@index')->name('fixture.index');
Route::get('/fixture/edit/{id}','FixtureController@edit')->name('fixture.edit');

Route::get('/fixture/nuevo','FixtureController@create')->name('fixture.nuevo');
Route::post('/fixture/guardar','FixtureController@store')->name('fixture.guardar');
Route::post('/fixture/eliminar','FixtureController@destroy')->name('fixture.eliminar');
//Fin Parte de Erwin

//Inicio Parte de Marian

//Fin Parte de Marian
