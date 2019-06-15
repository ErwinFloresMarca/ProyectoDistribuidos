@extends('layout')

<!DOCTYPE html>
<html>
<head>
	<title>nuevo administrador</title>
</head>
<body>
		{{Form::open(array('method'=>'POST','route'=>'administrador.guardar'))}}

		{{ csrf_field() }}
		<br><br>
		<h2> <b> Registrar nuevo administrador</b></h2>
                <div class="form-group">
                    <label for="user">Nombre de Administrador:</label>
                    <input type="text" class="form-control" name="user" id="user" placeholder="Admin1" value="{{ old('user') }}">
                </div>
                @if($errors -> has('user'))
                    <font color="red">{{$errors->first(user)}}</font><br>
                    @endif

                <div class="form-group">
                    <label for="password">Introduzca contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="123654" value="{{ old('password') }}">
                </div>
                	@if($errors -> has('password'))
                    <font color="red">{{$errors->first(password)}}</font><br>
                    @endif

                 <div class="form-group">
                    <label for="password_confir">Confirmar Contraseña:</label>
                    <input type="password" class="form-control" name="password_confir" id="password_confir" placeholder="123654" value="{{ old('password_confir') }}">
                </div>
                    {{Form::button('Borrar',['type'=>"reset",'class'=>"btn btn-danger"])}}
                    {{Form::button('Guardar',['type'=>"submit",'class'=>"btn btn-success"])}}

</body>
</html>