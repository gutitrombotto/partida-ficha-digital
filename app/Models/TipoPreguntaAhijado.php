<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPreguntaAhijado extends Model
{
    protected $table = 'tipo_preguntas_ahijado';

    public function preguntas_ahijado()
    {
        return $this->hasMany('App\Models\PreguntaAhijado');
    }
}
