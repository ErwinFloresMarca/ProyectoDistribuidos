<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
    protected $table = 'arbitros';

    public function persona (){
    	return $this->belongsTo(persona::class);
    }
}
