<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delegado</title>
  </head>
  <body>
    <div class="container">
      <br/>
      <div class="panel panel-default">

      <div class="panel-body">
        <fieldset   style="border:2px groove #00FFFF; background:#DDFFFF;
                            -moz-border-radius:20px;
                            border-radius: 20px;
                            -webkit-border-radius: 20px;
                            padding: 20px;">
        <legend class="w-auto"><h1 class='display-4 text-primary text-center'>Lista de delegados</h1></legend>

        <table class="table table-striped" >
          <tr> 

            <div class="input-group mb-2">
              <select class="form control">
                @foreach($datos['personas'] as $persona)
                <option value='{{$persona->idpe}}'>{{$persona->nombre}} {{$persona->ap_paterno}} {{$persona->ap_materno}}</option>
              </select>  
              <a href="delegado/nuevo/{{$persona->idpe}}"
                    target="_blank"
                    class="btn btn-default btn-warning">Nuevo</i>
                </a>
                @endforeach
            </div>
          </tr>
      </div>
      
      <tr>
        <td>No. </td> <td>Usuario</td> <td>Persona</td> <td>Contraseña</td>
      </tr>
      <?php
      use Illuminate\Support\Facades\Crypt;
      $i=1;
      ?>
      @foreach($datos['delegados'] as $delegado)
      <tr>
        <td>{{$i++}}</td> 
        <td>{{$delegado->user}}</td>
        <td>{{$delegado->nombre}} {{$delegado->ap_paterno}} {{$delegado->ap_materno}}</td> 
        <td>{{$delegado->password}}</td>
        <td>
          <a href="delegado/editar/{{$delegado->id}}"
              class="btn btn-default btn-primary">Editar</i>
          </a>
          <a href="delegado/eliminar/{{$delegado->id}}" 
             onclick="return confirm ('¿ELIMINAR DELEGADO?')"
             class="btn btn-danger btn-primary" >Eliminar</i>
          </a>
          
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