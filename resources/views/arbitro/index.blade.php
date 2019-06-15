<!DOCTYPE html>
<html>
<head>
	<title> Arbitros </title>
</head>
<body>
		@extends ('layout')

		<br><br><br>

		<div class="btn-group" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    Seleccione una Persona
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    @foreach($datos['personas'] as $persona)
                    <li><a href="arbitro/nuevo/{{$persona->idar}}">{{$persona->nombre}} {{$persona->ap_paterno}} {{$persona->ap_materno}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
		<table  class="table table-striped"  >
		<thead>
				<tr class="active">
					<td><b>ID</b></td>
					<td><b>Nombre</b></td>
					<td><b>Apellido Paterno</b></td>
					<td><b>Apellido Materno</b></td>
					
				</tr>
		</thead>
		@if (! empty($datos))
			<?php ?>
		 	@foreach($datos['arbitros'] as $arbitro)
				<tr>
					<td> {{ $arbitro -> id }} </td>
					<td> {{ $arbitro -> nombre }} </td>
					<td> {{ $arbitro -> ap_paterno}} </td>
					<td> {{ $arbitro -> ap_materno }} </td>
					<td> <a href="arbitro/edit/{{$arbitro->id}}" class="btn btn-primary"> Editar Datos </a> 
					<a href="arbitro/eliminar/{{ $arbitro->id}}" class="btn btn-danger btn-primary"  onclick="return confirm ('¿Eliminar arbitro?')"> Eliminar </a>
				    </td>
				</tr>
		 	@endforeach

			@endif
		</table>
</body>
</html>