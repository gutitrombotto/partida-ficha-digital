<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasAhijadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_ahijado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('presentacion_id')->unsigned();
            $table->integer('pregunta_id')->unsigned();
            $table->longText('respuesta');

            $table->timestamps();
            
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('presentacion_id')->references('id')->on('presentaciones');
            $table->foreign('pregunta_id')->references('id')->on('preguntas_ahijado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas_ahijado');
    }
}
