<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('partida_id')->unsigned();
            $table->integer('padrino_id')->unsigned();
            $table->integer('ahijado_id')->unsigned();

            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('padrino_id')->references('id')->on('usuarios');
            $table->foreign('ahijado_id')->references('id')->on('usuarios');


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
        Schema::dropIfExists('presentaciones');
    }
}
