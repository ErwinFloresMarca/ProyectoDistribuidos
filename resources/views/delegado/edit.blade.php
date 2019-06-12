<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insertar delegado</title>
  </head>
  <body>
    <div class="container">
      <br/>
      <div class="panel panel-default">

			<div class="panel-body">
    {{Form::open(array('method'=>'POST','route'=>'delegado.actualizar'))}}

      <fieldset   style="border:2px groove #00FFFF; background:#DDFFFF;
                          -moz-border-radius:20px;
                          border-radius: 20px;
                          -webkit-border-radius: 20px;
                          padding: 20px;">
      <legend class="w-auto"><p class='display-4 text-primary'>Editar delegado</p></legend>

      <div class="panel panel-default">
			<div class="panel-body">

      <div class="form-group">
        
          {{Form::label('user','Nombre de Usuario')}}
          {{Form::text('user',$delegado->user,[
            'class'=>'form-control '.( ($errors->isNotEmpty())?
                (($errors->has('user'))? 'is-invalid' : 'is-valid'): '' ),
            'id'=>"user",]) }}
          @if(($errors->isNotEmpty()))
          <div class="{{($errors->has('user'))? 'in':''}}valid-feedback">
            {{$errors->has('user')?$errors->first('user'):'¡Se ve bien!'}}
          </div>
          @endif
        
        <br>
        <div class="form-group">
          {{Form::label('password','Contraseña: ')}}
          {{Form::number('password','',[
            'class'=>'form-control '.(
              ($errors->isNotEmpty())?
            (($errors->has('password'))? 'is-invalid' : 'is-valid'): '' ),
            'id'=>"password",
            'placeholder'=>"Intro contraseña"
          ] ) }}
          @if(($errors->isNotEmpty()))
          <div class="{{($errors->has('password'))? 'in':''}}valid-feedback">
            {{$errors->has('password')?$errors->first('password'):'¡Se ve bien!'}}
          </div>
          @endif
        </div>
        <div class="form-group">
          {{Form::label('password_confir','Confirmar contraseña: ')}}
          {{Form::number('password_confir','',[
            'class'=>'form-control '.(
              ($errors->isNotEmpty())?
            (($errors->has('password_confir'))? 'is-invalid' : 'is-valid'): '' ),
            'id'=>"password_confir",
            'placeholder'=>"Intro contraseña"
          ] ) }}
          @if(($errors->isNotEmpty()))
          <div class="{{($errors->has('password_confir'))? 'in':''}}valid-feedback">
            {{$errors->has('password_confir')?$errors->first('password_confir'):'¡Se ve bien!'}}
          </div>
          @endif
        </div>
        
      </div>
      {{ Form::hidden('id', $delegado->id )}}
      {{ Form::hidden('persona_id', $delegado->persona_id )}}
      {{Form::button('Borrar',['type'=>"reset",'class'=>"btn btn-danger"])}}
      {{Form::button('Guardar',['type'=>"submit",'class'=>"btn btn-success"])}}

      </div>
      </div>
    </fieldset>

    {{Form::close()}}
    @if(session('estado'))
    <br>
    <br>
      <div class="alert alert-success" role="alert">
          {{ session('estado') }}
      </div>
    @endif
    </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>