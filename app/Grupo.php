<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actividad;
use App\Fixture;
class Grupo extends Model
{
    protected $table='grupos';
    public function actividades(){
      return $this->hasMany(Actividad::class);
    }
    public function fixture(){
        return $this->belongsTo(Fixture::class);
    }

    public function CrearGrupos($fixture_id,$cant,$equipos,$cantPartidosDia,$horas,$fechaInicio,$arbts){
      $n=intval(count($equipos)/$cant);
      $res=(count($equipos))%$cant;
      $subEquipos;
      $na=intval(count($arbts)/$cant);
      $resa=(count($arbts))%$cant;
      $abitros;
      for($i=0;$i<$cant;$i++){
        $x=(0<$res--)?$n+1:$n;
        for($j=0;$j<$x;$j++){
          $pos=rand(0,count($equipos)-1);
          $subEquipos[$i][$j]=$equipos[$pos];
          unset($equipos[$pos]);
          $equipos = array_values($equipos);
        }
        $xa=(0<$resa--)?$na+1:$na;
        for($j=0;$j<$xa;$j++){
          $pos=rand(0,count($arbts)-1);
          $arbitros[$i][$j]=$arbts[$pos];
          unset($arbts[$pos]);
          $arbts = array_values($arbts);
        }
      }

      //crear series
          $s='A';
          for($i=0;$i<$cant;$i++){
            $serie=new Grupo;
            $serie->fixture_id=$fixture_id;
            $serie->tipo=0;
            $serie->nombre='Serie '.$s++;
            $serie->save();
            $act=new Actividad;
            $act->CrearActividades($serie->id,$subEquipos[$i],$cantPartidosDia,$horas,$fechaInicio,$arbitros[$i]);
          }
          if($cant>1){
            $serie=new Grupo;
            $serie->fixture_id=$fixture_id;
            $serie->tipo=1;
            $serie->nombre='Clasificatoria';
            $serie->save();
            $act=new Actividad;
            $act->CrearClasificatorias($serie->id,$cant,$cantPartidosDia,$fechaInicio);
          }
    }
}
