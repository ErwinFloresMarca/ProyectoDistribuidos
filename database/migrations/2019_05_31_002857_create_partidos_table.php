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
            $table->bigInteger('arbitro_id')->unsigned();
            $table->foreign('arbitro_id')->references('id')->on('arbitros');
            $table->bigInteger('fecha_id')->unsigned();
            $table->foreign('fecha_id')->references('id')->on('fechas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');

    }
}
