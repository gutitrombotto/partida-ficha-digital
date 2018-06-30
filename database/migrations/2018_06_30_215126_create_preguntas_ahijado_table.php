<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasAhijadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_ahijado', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pregunta');

            $table->integer('tipo_id')->unsigned();

            $table->foreign('tipo_id')->references('id')->on('tipo_preguntas_ahijado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas_ahijado');
    }
}
