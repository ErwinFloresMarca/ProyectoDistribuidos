<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Arbitro;
use App\Equipo;
use App\Actividad;

class Partido extends Model
{
    //
    protected $table='partidos';
    public function arbitro(){
      return $this->belongsTo(Arbitro::class);
    }
    public function equipos(){
      return $this->belongsToMany(Equipo::class);
    }
    public function actividad(){
      return $this->belongsTo(Actividad::class);
    }
    public function crearPartidos($act,$cantPartidosDia,$horas,$partidos,$arbitros){
      $FI=strtotime($act->fecha_inicio);
      $ph=0;
      $pa=0;
      foreach($partidos as $partido){
        if(($partido['local']!=-1)&&($partido['visitante']!=-1)){
          $par=new Partido;
          $par->fecha_partido=date("Y-m-d", $FI);
          $par->hora_partido=$horas[$ph++];
          $par->estado=0;
          $par->arbitro_id=$arbitros[$pa++];
          $par->actividad_id=$act->id;
          $par->local_id=$partido['local'];
          $par->visitante_id=$partido['visitante'];
          $par->goles_local=0;
          $par->goles_visitante=0;
          $par->save();

          $FI+=(($ph/count($horas))*86400);
          $ph=$ph%count($horas);
          $pa=($pa==count($arbitros))?0:$pa;
        }
      }
    }
}
