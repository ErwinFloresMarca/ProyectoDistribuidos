<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Fixture</title>
  </head>
  <body>
    <div class="container">
      <br/>
      <div class="panel panel-default">

			<div class="panel-body">
    {{Form::open(array('method'=>'POST','route'=>'fixture.guardar'))}}

      <fieldset   style="border:2px groove #00FFFF; background:#DDFFFF;
                          -moz-border-radius:20px;
                          border-radius: 20px;
                          -webkit-border-radius: 20px;
                          padding: 20px;">
      <legend class="w-auto"><p class='display-4 text-primary'>Nuevo Fixture</p></legend>

      <div class="panel panel-default">
			<div class="panel-body">

      <div class="form-row">
        <div class="col-md-4 mb-3">
          {{Form::label('nombre','Nombre de Fixture')}}
          {{Form::text('nombre','',[
            'class'=>'form-control '.( ($errors->isNotEmpty())?
                (($errors->has('nombre'))? 'is-invalid' : 'is-valid'): '' ),
            'id'=>"nombre",
            'placeholder'=>"Nombre Fixture"]) }}
          @if(($errors->isNotEmpty()))
          <div class="{{($errors->has('nombre'))? 'in':''}}valid-feedback">
            {{$errors->has('nombre')?$errors->first('nombre'):'¡Se ve bien!'}}
          </div>
          @endif
        </div>

        <div class="col-md-4 mb-3">
          {{Form::label('series','Numero de Series')}}
          {{Form::number('series','1',[
            'class'=>'form-control '.(
              ($errors->isNotEmpty())?
            (($errors->has('series'))? 'is-invalid' : 'is-valid'): '' ),
            'id'=>"series",
            'placeholder'=>"num. series"
          ] ) }}
          @if(($errors->isNotEmpty()))
          <div class="{{($errors->has('series'))? 'in':''}}valid-feedback">
            {{$errors->has('series')?$errors->first('series'):'¡Se ve bien!'}}
          </div>
          @endif
        </div>
      </div>
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
