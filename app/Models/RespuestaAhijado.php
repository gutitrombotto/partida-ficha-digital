<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestaAhijado extends Model
{
    protected $table = 'respuestas_ahijados';

    public function presentacion()
    {
        return $this->belongsTo('App\Models\Presentacion', 'presentacion_id');
    }

    public function partidista()
    {
        return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }

    public function pregunta()
    {
        return $this->belongsTo('App\Models\PreguntaPadrino', 'pregunta_id');
    }
}
