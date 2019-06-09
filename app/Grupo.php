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

    public function CrearGrupos($fixture_id,$cant,$equipos){
      $n=intval(count($equipos)/$cant);
      $res=(count($equipos)%$cant;
      $subEquipos;
      for($i=0;$i<$cant;$i++){
        $x=(0<$res--)?$n+1:$n;
        for($j=0;$j<$x;$j++){
          $pos=rand(0,count($equipos)-1);
          $subEquipos[$i][$j]=$equipos[$pos];
          unset($equipos[$pos]);
          $equipos = array_values($equipos);
        }
      }

      if($cant>1){

      }
      else{
        $serie=new Grupo;
        $serie->fixture_id=$fixture_id;
        $serie->tipo=0;
        $serie->nombre='Clasificación';
        $serie->save();
        $act=new Actividad;
        $act->CrearActividades($serie->id,$subEquipos[0]);
      }
    }
}
