<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 7);
            $table->boolean('codigo_usado')->default(false);
            $table->integer('partida_id')->unsigned();

            $table->timestamps();

            $table->foreign('partida_id')->references('id')->on('partidas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigos');
    }
}
