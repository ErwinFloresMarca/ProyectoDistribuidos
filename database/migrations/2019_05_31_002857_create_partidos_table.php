<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('fecha_partido');
            $table->string('hora_partido');
            $table->bigInteger('fecha_id')->unsigned()->unique();
            $table->foreign('fecha_id')->references('id')->on('fechas');
        });
         Schema::create('equipo_partido', function (Blueprint $table) {
            $table->bigInteger('equipo_id')->unsigned()->unique();
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->bigInteger('partido_id')->unsigned()->unique();
            $table->foreign('partido_id')->references('id')->on('partidos');
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

        Schema::dropIfExists('equipo_partido');
        Schema::dropIfExists('partidos');

    }
}
