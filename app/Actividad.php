<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Grupo;
use App\Partido;

class Actividad extends Model
{
    //
    protected $table='actividades';
    public function grupo(){
      return $this->belongsTo(Grupo::class);
    }
    public function partidos(){
      return $this->hasMany(Partido::class);
    }
    public function crearActividades($grupo_id,$equipos,$cantPartidosDia,$horas,$fechaInicio,$arbitro_id){
      $n=count($equipos);
      if($n%2==1){
        $equipos[$n++]=-1;
      }
      $FI=strtotime($fechaInicio);
      $piv=0;
      $fn=1;
      do{
        $l=$piv;
        $r=$l-1;
        $r=($r<0)?(count($equipos))-1:$r;
        $ri=$r;
        $ld=$l;
        $partidos=array();


        for($i=0;$i<($n/2);$i++){
          $partidos[$i]=array(
            'local'=> $equipos[$ld],
            'visitante'=> $equipos[$ri]
          );
          $ri--; $ld++;
          $ri=($ri<0)?(count($equipos))-1:$ri;
          $ld=$ld%count($equipos);
        }
        $duracion=intval(count($partidos)/$cantPartidosDia)+(((intval(count($partidos)%$cantPartidosDia))>0)?1:0);
        $duracion--;
        $act=new Actividad;
        $act->fecha_inicio=date("Y-m-d", $FI);
        $FI+=($duracion*86400);
        $act->fecha_fin=date("Y-m-d", $FI);
        $FI+=86400;
        $act->nombre='Fecha '.$fn++;
        $act->grupo_id=$grupo_id;
        $act->save();
        $part=new Partido;
        $part->crearPartidos($act,$cantPartidosDia,$horas,$partidos,$arbitro_id);

        $aux=$equipos[$r];
        $equipos[$r]=$equipos[$l];
        $equipos[$l]=$aux;

        $piv=$r;
      }while($piv!=1);
      return date("Y-m-d", $FI);
    }
    public function crearClasificatorias($grupo_id,$cant,$cantPartidosDia,$fechaInicio){
      $FI=strtotime($fechaInicio);
        switch($cant){
          case 8:
          $duracion=intval(8/$cantPartidosDia)+((8%$cantPartidosDia>0)?1:0);
          $act=new Actividad;
          $act->fecha_inicio=date("Y-m-d", $FI);
          $FI+=($duracion*86400);
          $act->fecha_fin=date("Y-m-d", $FI);
          $FI+=86400;
          $act->nombre='Octavos de Final';
          $act->grupo_id=$grupo_id;
          $act->save();

          case 4:
          $duracion=intval(4/$cantPartidosDia)+((4%$cantPartidosDia>0)?1:0);
          $act=new Actividad;
          $act->fecha_inicio=date("Y-m-d", $FI);
          $FI+=($duracion*86400);
          $act->fecha_fin=date("Y-m-d", $FI);
          $FI+=86400;
          $act->nombre='Cuartos de Final';
          $act->grupo_id=$grupo_id;
          $act->save();
          case 2:
          $duracion=intval(2/$cantPartidosDia)+((2%$cantPartidosDia>0)?1:0);
          $act=new Actividad;
          $act->fecha_inicio=date("Y-m-d", $FI);
          $FI+=($duracion*86400);
          $act->fecha_fin=date("Y-m-d", $FI);
          $FI+=86400;
          $act->nombre='Semi Final';
          $act->grupo_id=$grupo_id;
          $act->save();

          $duracion=intval(1/$cantPartidosDia)+((1%$cantPartidosDia>0)?1:0);
          $act=new Actividad;
          $act->fecha_inicio=date("Y-m-d", $FI);
          $FI+=($duracion*86400);
          $act->fecha_fin=date("Y-m-d", $FI);
          $FI+=86400;
          $act->nombre='Final';
          $act->grupo_id=$grupo_id;
          $act->save();
        }
    }
}
