<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToFichasPadrinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fichas_padrinos', function (Blueprint $table) {
            $table->integer('presentacion_id')->unsigned();

            $table->foreign('presentacion_id')->references('id')->on('presentaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fichas_padrinos', function (Blueprint $table) {
            $table->dropForeign(['presentacion_id']);
            $table->dropColumn('presentacion_id');
        });
    }
}
