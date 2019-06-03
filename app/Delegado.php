<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delegado extends Model
{
    protected $table = 'delegados';

    public function persona(){
    	return $this-> belongsTo(persona::class);
    }

    public function equipo(){
    	return $this ->hasOne(equipo::class);
    }
}
