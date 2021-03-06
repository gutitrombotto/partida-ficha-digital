<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestaPadrino extends Model
{
    protected $table = 'respuestas_padrinos';

    public function presentacion()
    {
        return $this->belongsTo('App\Models\Presentacion', 'presentacion_id');
    }

    public function padrino()
    {
        return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }

    // public function preguntas()
    // {
    //     return $this->hasMany('App\Models\Pregunta');
    // }

    public function preguntas()
    {
        return $this->morphMany('App\Models\Pregunta', 'preguntatable');
    }
}
