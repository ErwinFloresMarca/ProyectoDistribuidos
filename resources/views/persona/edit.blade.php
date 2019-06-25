<!DOCTYPE html>
<html>
@extends('layout')
@section('content')
<head>
	<title></title>
</head>
<body>
{{ Form::open(array('method'=>'POST','route'=>'persona.actualizar')) }}
{{ Form::hidden ('id', $persona['id'])}}
 {{ csrf_field() }}
 <br><br>
    <div class="card">
        <h4 class="card-header">Editar Persona</h4>
        <div class="card-body">
                <div class="form-group">
                    <label for="ci" >Carnet de Identidad:</label>
                    <input type="number" class="form-control" name="ci" id="ci"  value="{{ old('ci', $persona->ci) }}" disabled="ci">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"  value="{{ old('nombre', $persona->nombre) }}">
                </div>
                     @if($errors -> has('nombre'))
                    <font color="red">{{$errors->first(nombre)}}</font><br>
                    @endif
                 <div class="form-group">
                    <label for="ap_paterno">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="ap_paterno" id="ap_paterno"  value="{{ old('ap_paterno', $persona->ap_paterno) }}">
                </div>
                     @if($errors -> has('ap_paterno'))
                    <font color="red">{{$errors->first(ap_paterno)}}</font><br>
                    @endif
                 <div class="form-group">
                    <label for="ap_materno">Apellido Materno:</label>
                    <input type="text" class="form-control" name="ap_materno" id="ap_materno"  value="{{ old('ap_materno' ,$persona->ap_materno) }}">
                </div>
                     @if($errors -> has('ap_materno'))
                    <font color="red">{{$errors->first(ap_materno)}}</font><br>
                    @endif
                 <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"  value="{{ old('fecha_nacimiento', $persona->fecha_nacimiento)}}" >
                </div>
                     @if($errors -> has('fecha_nacimiento'))
                    <font color="red">{{$errors->first(fecha_nacimiento)}}</font><br>
                    @endif
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email' , $persona->email)}}" disabled="email">
                </div>
                
                    {{Form::button('Actualizar',['type'=>"submit",'class'=>"btn btn-success"])}}

</body>
</html>