<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasPadrinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_padrino', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('respuesta');
            $table->integer('usuario_id')->unsigned();
            $table->integer('presentacion_id')->unsigned();
            $table->integer('pregunta_id')->unsigned();
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('presentacion_id')->references('id')->on('presentaciones');
            $table->foreign('pregunta_id')->references('id')->on('preguntas_padrino');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas_padrino');
    }
}
