<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToFichasAhijadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fichas_ahijados', function (Blueprint $table) {
            $table->integer('presentacion_id')->unsigned()->nullable();
            $table->integer('usuario_id')->unsigned();

            $table->foreign('presentacion_id')->references('id')->on('presentaciones');
            $table->foreign('usuario_id')->references('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fichas_ahijados', function (Blueprint $table) {
            $table->dropForeign(['presentacion_id']);
            $table->dropForeign(['usuario_id']);
            $table->dropColumn('presentacion_id');
            $table->dropColumn('usuario_id');

        });
    }
}
