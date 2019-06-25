<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fixture</title>
  </head>
  <body>
      @extends ('layout3')
      <br><br>
    <div class="container">
      <br/>
      <div class="panel panel-default">

			<div class="panel-body">
        <fieldset   style="border:2px groove #00FFFF; background:#DDFFFF;
                            -moz-border-radius:20px;
                            border-radius: 20px;
                            -webkit-border-radius: 20px;
                            padding: 20px;">
        <legend class="w-auto"><h1 class='display-4 text-primary text-center'>Lista de Fixtures</h1></legend>
        @if(session('estado'))

          <div class="alert alert-success" role="alert">
              {{ session('estado') }}
          </div>
        @endif
    <table class="table table-striped" >
      <thead>
        <tr>
          <th>No. </th> <th>Fixture</th> <th>Estado</th> <th>Opciones</th>
        </tr>
      </thead>

      <?php
      use Illuminate\Support\Facades\Crypt;
      $i=1;
      ?>
      @foreach($fixtures as $fixture)
      <tr>
        <td>{{$i++}}</td> <td>{{$fixture->nombre}}</td> <td>{{$fixture->estado}}</td>
        <td>
          <a href="/fixture/rol/ {{Crypt::encrypt($fixture->id)}}"
              target="_blank"
              class="btn btn-default btn-primary">Rol</i>
          </a>
          <a href="/fixture/resultados/ {{Crypt::encrypt($fixture->id)}}"
              target="_blank"
              class="btn btn-default btn-secondary">Resultados</i>
          </a>
          <a href="/grupo/ {{Crypt::encrypt($fixture->id)}}"
              target="_blank"
              class="btn btn-default btn-warning">grupos</i>
          </a>
          <a href="/fixture/edit/ {{Crypt::encrypt($fixture->id)}}"
            class="btn btn-info btn-xs">editar</i>
          </a>
          {{Form::open(array('method'=>'Post','route'=>'fixture.eliminar','style'=>'display: inline;'))}}
               <input type="hidden" name="id" value="{{Crypt::encrypt($fixture->id)}}">
             <button class="btn btn-danger btn-xs"
                onclick="return confirm('Estas seguro de querer eliminar todos los datos relacionados a este fixture?')">Eliminar</i>
             </button>
          {{Form::close()}}
        </td>
      </tr>
      @endforeach
    </table>
  </fieldset>
  </div>
  </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
