<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('partido_id')->unsigned();
            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->bigInteger('equipo_id')->unsigned();
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->integer('estado');
            $table->integer('goles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participaciones');
    }
}
