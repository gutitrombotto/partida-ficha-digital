<?php

use Illuminate\Database\Seeder;

class TipoPreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipo_preguntas_padrino')->insert( [
            'tipo' => "Prepartida"
        ], [
            'tipo' => "Partida"
        ], [
            'tipo' => "Personalidad"
        ], [
            'tipo' => "Ambiente"
        ], [
            'tipo' => "Religiosidad"
        ]);
        \DB::table('tipo_preguntas_ahijado')->insert( [
            'tipo' => "Aspecto Personal"
        ], [
            'tipo' => "Relacion con los demas"
        ], [
            'tipo' => "Relacion con Dios"
        ]);

    }
}
