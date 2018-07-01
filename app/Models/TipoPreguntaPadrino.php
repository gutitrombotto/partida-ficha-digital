<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPreguntaPadrino extends Model
{
    protected $table = 'tipo_preguntas_padrino';

    public function preguntas_padrino()
    {
        return $this->hasMany('App\Models\PreguntaPadrino');
    }
}
