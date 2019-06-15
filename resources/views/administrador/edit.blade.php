<!DOCTYPE html>
<html>
<head>
	<title>editar Administrador</title>
</head>
<body>
		@extends('layout')
		{{ Form::open(array('method'=>'POST','route'=>'administrador.actualizar')) }}
		{{ Form::hidden ('id', $persona['id'])}}
      	{{ Form::hidden('persona_id', $administrador->persona_id )}}
		{{ csrf_field() }}
		<br><br><br>
		<h3> <b> Editar Administrador</b></h3>
                <div class="form-group">
                    <label for="user">Nombre de Administrador:</label>
                    <input type="text" class="form-control" name="user" id="user" placeholder="Admin1" value="{{ old('user' , $administrador -> user) }}">
                </div>

                <div class="form-group">
                    <label for="password">Introduzca contraseña:</label>

                    <input type="text" class="form-control" name="password" id="password" placeholder="123654" value="{{ old('password' , $administrador -> password) }}">
                </div>

                 {{Form::button('Actualizar Informacion',['type'=>"submit",'class'=>"btn btn-success"])}}


</body>
</html>