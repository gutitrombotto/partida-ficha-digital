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
            $table->integer('ficha_padrino_id')->unsigned();
            $table->integer('ficha_ahijado_id')->unsigned();
            $table->integer('padrino_id')->unsigned();
            $table->integer('ahijado_id')->unsigned();
            $table->integer('partida_id')->unsigned();

            $table->foreign('ficha_ahijado_id')->references('id')->on('fichas_ahijados');
            $table->foreign('ficha_padrino_id')->references('id')->on('fichas_padrinos');
            $table->foreign('padrino_id')->references('id')->on('usuarios');
            $table->foreign('ahijado_id')->references('id')->on('usuarios');
            $table->foreign('partida_id')->references('id')->on('partidas');

            
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
