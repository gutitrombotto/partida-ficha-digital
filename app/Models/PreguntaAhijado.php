<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntaAhijado extends Model
{
    protected $table = 'preguntas_ahijado';

    public function respuestas_ahijado()
    {
        return $this->hasMany('App\Models\RespuestaAhijado');
    }

    public function tipo_pregunta()
    {
        return $this->belongsTo('App\Models\TipoPreguntaAhijado', 'tipo_id');
    }
}
