@extends('layout')

@section('title', "Registrar Persona")

@section('content')
 <br><br>
 
    <div class="card">
        <h4 class="card-header">Crear usuario</h4>
        <div class="card-body">
            {{Form::open(array('method'=>'POST','route'=>'persona.guardar'))}}
           
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="ci">Carnet de Identidad:</label>

                    <input type="number" class="form-control" name="ci" id="ci" placeholder="123654" value="{{ old('ci') }}">
                </div>
                    @if($errors -> has('ci'))
                    <font color="red">{{$errors->first()}}</font><br>
                    @endif

                <div class="form-group">
                    <label for="nombre">Nombre:</label>

                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Pedro" value="{{ old('nombre') }}">
                </div>
                    @if($errors -> has('nombre'))
                    <font color="red">{{$errors->first(nombre)}}</font><br>
                    @endif
                 <div class="form-group">
                    <label for="ap_paterno">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="ap_paterno" id="ap_paterno" placeholder="Perez" value="{{ old('ap_paterno') }}">
                </div>
                @if($errors -> has('ap_paterno'))
                    <font color="red">{{$errors->first(ap_paterno)}}</font><br>
                    @endif
                 <div class="form-group">
                    <label for="ap_materno">Apellido Materno:</label>
                    <input type="text" class="form-control" name="ap_materno" id="ap_materno" placeholder="Quispe" value="{{ old('ap_materno') }}">
                </div>
                    @if($errors -> has('ap_materno'))
                    <font color="red">{{$errors->first(ap_materno)}}</font><br>
                    @endif
                 <div class="form-group">
                    <label for="fe">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="1997-02-11" value="{{ old('fecha_nacimiento') }}">
                </div>
                    @if($errors -> has('ci'))
                    <font color="red">{{$errors->first()}}</font><br>
                    @endif
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email') }}">
                </div>
                    @if($errors -> has('email'))
                    <font color="red">{{$errors->first(email)}}</font><br>
                    @endif

                    {{Form::button('Borrar',['type'=>"reset",'class'=>"btn btn-danger"])}}
                    {{Form::button('Guardar',['type'=>"submit",'class'=>"btn btn-success"])}}
            </form>
        </div>
    </div>
@endsection