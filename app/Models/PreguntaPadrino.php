<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntaPadrino extends Model
{
    protected $table = 'preguntas_padrino';

    public function respuestas_padrino()
    {
        return $this->hasMany('App\Models\RespuestaPadrino');
    }

    public function tipo_pregunta()
    {
        return $this->belongsTo('App\Models\TipoPreguntaPadrino', 'tipo_id');
    }
}
