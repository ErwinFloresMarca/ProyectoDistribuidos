
<html>
@extends('layout')
<head>
	<br>
	<br>
	<br>
	<title>Personas que participaran en el fixture</title>
</head>
<body>
	<div class="container">
				<div class="panel-body">
        <fieldset   style="border:3px groove #2B0E34; background:#DFFFFF;
                            -moz-border-radius:30px;
                            border-radius: 30px;
                            -webkit-border-radius: 25px;
                            padding: 23px;">
        <legend class="w-auto"><h1 class='display-4 text-primary text-center'>Lista de Personas</h1></legend>
		<table  class="table table-striped"  >
			<thead>
				<tr class="active">
					<td>Nro.</td>
					<td>C.I.</td>
					<td>Nombre</td>
					<td>Apellido Paterno</td>
					<td>Apellido Materno</td>
					<td>Fecha de Nacimiento</td>
					<td>Correo Electronico</td>
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
				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>
