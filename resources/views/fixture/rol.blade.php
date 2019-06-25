<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rol De Partidos</title>
  </head>
  <body>
    <div class="container">
    <br/>
    <div class="panel panel-default">
		<div class="panel-body">
      <center><h1 class='display-4 text-primary text-center'>Rol De Partidos</h1></center>
        <div class="row">
        <?php
        use App\Equipo;
        $grupos=$fixture->grupos()->get();
        $cont=1;
        foreach ($grupos as $grupo): ?>
        <div class="col" align='center' >
        <fieldset   style="border:2px groove #00FFFF; background:#DDFFFF;
                            -moz-border-radius:20px;
                            border-radius: 20px;
                            -webkit-border-radius: 20px;
                            padding: 20px;
                            <?php if ($grupo->tipo==1): ?>
                            width:50%;
                            <?php endif; ?>
                            ">
        <legend class="w-auto"><h1 class='display-5 text-primary text-center'>{{$grupo->nombre}}</h1></legend>
          <table class="table table-striped table-sm" >
              <thead>
                <tr align="center">
                  <td><b>Fecha</b></td> <td><b>Hora</b></td> <td align='right'><b>Local</b></td> <td width='70px'></td> <td align='left'><b>Visitante</b></td>
                </tr>
              </thead>
              <tbody>
                <?php
                $actividades=$grupo->actividades()->get();
                foreach ($actividades as $actividad): ?>
                  <tr class="table-primary">
                    <td colspan="5">{{$actividad->nombre}}</td>
                  <tr>
                    <?php $partidos=$actividad->partidos()->get();
                    foreach ($partidos as $partido):
                      $local=Equipo::find($partido->local_id);
                      $visitante=Equipo::find($partido->visitante_id);
                      ?>
                  <tr>
                    <td>{{date('d-m-Y',strtotime($partido->fecha_partido))}}</td>
                    <td>{{$partido->hora_partido}}</td>
                    <td align="right">
                      <img src="/img/Polera.png" style='background:{{$local->color}};' width="25px" height="22px" align='left'/>
                      {{$local->nombre_equipo}}
                    </td>
                    <td align='center'>
                      @if($partido->estado==1)
                      <?php if ($partido->goles_local>$partido->goles_visitante): ?>
                      <div class="row">
                        <div class="col text-success">
                          {{$partido->goles_local}}
                        </div>-<div class="col text-danger">
                          {{$partido->goles_visitante}}
                        </div>
                      </div>
                      <?php elseif($partido->goles_local<$partido->goles_visitante): ?>
                      <div class="row">
                        <div class="col text-danger">
                          {{$partido->goles_local}}
                        </div>-<div class="col text-success">
                          {{$partido->goles_visitante}}
                        </div>
                      </div>
                      <?php else: ?>
                      <div class="row">
                        <div class="col text-warning">
                          {{$partido->goles_local}}
                        </div>-<div class="col text-warning">
                          {{$partido->goles_visitante}}
                        </div>
                      </div>
                      <?php endif; ?>
                      @else
                      <div class="">
                        -
                      </div>
                      @endif
                    </td>
                    <td>{{$visitante->nombre_equipo}}
                      <img src="/img/Polera.png" style='background:{{$visitante->color}};' width="25px" height="22px" align='right'/>
                    </td>
                  </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

              </tbody>
        </table>
      </fieldset>
      </div>
      <?php if ($cont%2==0): ?>
      </div><div class="row">
      <?php endif; ?>
      <?php
      $cont++;
      endforeach; ?>
      </div>
  </div>
  </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
