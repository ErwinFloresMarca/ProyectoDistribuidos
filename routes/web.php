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
/*
Route::get('url','Nombre_controlador@nombre_metodo');

Route::get('url',function(){
	return "";
});

Route::get('ejemplo',function(){
	return "Mi primera ruta";
});

Route::post('enviar',function(){
	return "El parametro".$parametro;
});

Route::get('ejemplo/{parametro}',function($parametro){
	return "el parametro".$parametro;
});

Route::get('ejemplo/{nombre}/{edad}',function($nombre,$edad){
	return "mi nombre es: ".$nombre."y tengo ".$edad."años";
});

Route::get('master',function(){
	return view('master');
});

Route::get('admin/index',function(){
	$datos=array('nombre'=>'Yessica',
				'edad'=>'22');
	return view('admin.index')->with('parametro',$datos);
});
*/
//Inicio Parte de Yessi
Route::get('persona','PersonaController@index')->name('persona.index');


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
