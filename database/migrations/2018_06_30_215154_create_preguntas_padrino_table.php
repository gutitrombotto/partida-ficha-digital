<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasPadrinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_padrino', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pregunta');

            $table->integer('tipo_id')->unsigned();

            $table->foreign('tipo_id')->references('id')->on('tipo_preguntas_padrino');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas_padrino');
    }
}
