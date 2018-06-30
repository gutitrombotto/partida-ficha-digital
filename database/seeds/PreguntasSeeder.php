<?php

use Illuminate\Database\Seeder;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('preguntas_padrino')->insert( [
            'pregunta' => '¿Cuánto hace que conocés a tu ahijado? ¿De dónde?',
            'tipo_id' => 1
        ], [
            'pregunta' => '¿Hace cuánto que lo estás preparando?',
            'tipo_id' => 1
        ], [
            'pregunta' => '¿Tu ahijado conoce detalles de la PARTIDA? ¿Cuáles? (Palancas, cartas, recepción, etc.)',
            'tipo_id' => 1
        ], [
            'pregunta' => '¿Por qué lo presentás a PARTIDA? ¿Qué pensás que la PARTIDA le puede dar?',
            'tipo_id' => 1
        ], [
            'pregunta' => ' ¿Con qué predisposición va a la PARTIDA? (Indiferencia, curiosidad, miedo, ilusión, cierto rechazo, apertura, otros)' ,
            'tipo_id' => 2
        ], [
            'pregunta' => 'Según tu criterio ¿Cuál será su actitud ante charlas, debates, dinámicas de la PARTIDA? ¿Por qué pensasésto?',
            'tipo_id' => 2
        ], [
            'pregunta' => 'Describí su personalidad y su carácter',
            'tipo_id' => 3
        ], [
            'pregunta' => ' Explicá cómo se compone su familia (integrantes, edades)',
            'tipo_id' => 4
        ], [
            'pregunta' => ' ¿Cómo es la relación con los miembros de su familia? ',
            'tipo_id' => 4
        ], [
            'pregunta' => '¿Hay algún problema destacable de su familia que convenga aclarar?' ,
            'tipo_id' => 4
        ], [
            'pregunta' => '¿En qué otros ambientes se mueve? (Club, estudio, parroquia, trabajo, otros). Describí cómo son esos ambientes y ordenalos por prioridades.' ,
            'tipo_id' => 4
        ], [
            'pregunta' => '¿Qué papel desempeña, en general, en esos ambientes? (Se deja llevar por la masa, líder, factor de unión/desunión, alentador, negativo, otros)',
            'tipo_id' => 4
        ], [
            'pregunta' => 'Si tiene novio/a: ¿Cómo es su relación con él/ella?',
            'tipo_id' => 4
        ], [
            'pregunta' => '¿Hay algo que te preocupe en particular de tu ahijado/a y querés aclarar? ¿Tu ahijado ha tenido alguna experiencia en su vida que lo ha marcado en su forma de ser? (Si esta respuesta es de carácter reservado podés escribirla en sobre cerrado y nosotros se lo haremos llegar al sacerdote que acompañe a esta PARTIDA)',
            'tipo_id' => 4
        ], [
            'pregunta' => '¿Qué sacramentos recibió? ¿Se acerca actualmente a los sacramentos? (Eucaristía, confesión)',
            'tipo_id' => 5
        ], [
            'pregunta' => '¿Qué instrucción religiosa tiene? ¿Le interesa? ¿Qué temas acerca de fe y moral te preocupan de tu ahijado? ',
            'tipo_id' => 5
        ], [
            'pregunta' => '¿Participa o participó de algún movimiento?¿Hizo algún retiro?',
            'tipo_id' => 5
        ]);

        \DB::table('preguntas_ahijado')->insert( [
            'pregunta' => '¿Por qué querés hacer PARTIDA? ',
            'tipo_id' => 1
        ], [
            'pregunta' => ' Reflexioná sobre estos siete aspectos de tu vida y ordenalos por importancia cómo  los vivís: Espiritual - Afectivo - Político - Intelectual - Económico - Corporal - Social. Explica porqué.',
            'tipo_id' => 1
        ], [
            'pregunta' => '¿Qué querés y qué te gustaría ser en tu vida?',
            'tipo_id' => 1
        ], [
            'pregunta' => '¿Cuál es tu máxima aspiración y cómo la lograrías?',
            'tipo_id' => 1
        ], [
            'pregunta' => ' Cómo te ves a vos mismo: ¿Cuáles son tus tres principales virtudes? ¿Por qué? ¿Cuáles son tus tres principales defectos? ¿Por qué?',
            'tipo_id' =>1
        ], [
            'pregunta' => '¿Qué actividades desarrollás? ¿Dónde?',
            'tipo_id' => 2
        ], [
            'pregunta' => '¿Qué dicen de vos los demás? ¿Estás de acuerdo? ¿Por qué? ',
            'tipo_id' => 2
        ], [
            'pregunta' => '¿Qué defectos te molestan más de las otras personas? ¿Por qué?',
            'tipo_id' => 2
        ], [
            'pregunta' => '¿Tus padres viven? ¿Vivís con los dos juntos? ¿Cuántos hermanos tenés y cómo es tu relación con ellos?',
            'tipo_id' => 2
        ], [
            'pregunta' => 'En tu familia te sentís: cuestionado, ignorado, privilegiado, escuchado, aceptado, desatendido, valorizado, limitado, otros. ¿Por qué?',
            'tipo_id' => 2
        ], [
            'pregunta' => '¿Qué personas marcaron tu vida? ¿Para quién significas mucho? ¿Con quién o quienes tenés problemas?',
            'tipo_id' => 2
        ], [
            'pregunta' => '¿Quién  es  Dios  para  vos?  ¿Cuál  de  estas  imágenes  tenés  de  Él:  policía,  amigo,  juez,  castigador,  misericordioso, todopoderoso, paciente, indiferente a los problemas del hombre, padre, otros)?',
            'tipo_id' => 3
        ], [
            'pregunta' => '¿Qué cosas cuestionás de la Iglesia?',
            'tipo_id' => 3
        ], [
            'pregunta' => '¿Qué sacramentos recibiste? ¿Tenés un asesor o algún sacerdote fijo con el cual charlás?',
            'tipo_id' => 3
        ], [
            'pregunta' => 'Participaste en retiros o convivencias? ¿Qué te dieron y qué descubriste?   -   ¿Participás o participaste en trabajos apostólicos (grupo misionero, catequesis, etc.)? ¿Qué te dan o dieron y qué descubriste?',
            'tipo_id' => 3
        ], [
            'pregunta' => '¿Qué significa en tu vida la oración, la misa, la eucaristía, la confesión y la Virgen María?',
            'tipo_id' => 3
        ], [
            'pregunta' => '¿Cómo te sentís hoy con tu fe?',
            'tipo_id' => 3
        ], [
            'pregunta' => '¿Qué creés que PARTIDA te puede dar?',
            'tipo_id' => 3
        ]);
    }
}
