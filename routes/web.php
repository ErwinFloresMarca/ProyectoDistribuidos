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
