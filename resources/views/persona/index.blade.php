
<html>
@extends('layout')
<head>
	<br>
	<br>
	<br>
	<link rel="stylesheet" href="/css/bootstrap.min.css" >
	 <link rel="stylesheet" href="css/style.css">
	<title>Personas que participaran en el fixture</title>
</head>
<body>
	<div class="container" class="panel-defauld" >
				<div class="panel-body">
        <fieldset   style="border:1px groove #2B0E34; background:rgb(230,230,230,0.8);
                            -moz-border-radius:30px;
                            border-radius: 20px;
                            -webkit-border-radius: 30px;
                            padding: 23px;
							">

        <legend class="w-auto" align="center"> <h1 class='display-4 text-info'>Lista de Personas</h1></legend>

		<table  class="table table-striped"  >
			<thead>
				<tr class="active">
					<td><b>Nro.</b></td>
					<td><b>C.I.</b></td>
					<td><b>Nombre</b></td>
					<td><b>Apellido Paterno</b></td>
					<td><b>Apellido Materno</b></td>
					<td><b>Fecha de Nacimiento</b></td>
					<td><b>Correo Electronic</b>o</td>
					<td><b>Opciones</b></td>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				@foreach ($personas as $persona)
				<tr>
					<td> {{ $i++ }} </td>
					<td> {{ $persona -> ci }} </td>
					<td> {{ $persona -> nombre }} </td>
					<td> {{ $persona -> ap_paterno }} </td>
					<td> {{ $persona -> ap_materno }} </td>
					<td> {{ $persona -> fecha_nacimiento}} </td>
					<td> {{ $persona -> email }} </td>
					<td> <a href="persona/edit/{{$persona->id}}" class="btn btn-primary"> Editar Datos </a>
					<a href="persona/eliminar/{{ $persona->id}}" class="btn btn-danger btn-primary"  onclick="return confirm ('¿Desea eliminar a esta persona?')"> Eliminar </a>
				    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>
