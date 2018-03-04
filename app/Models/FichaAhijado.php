<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FichaAhijado extends Model
{
    protected $table = 'fichas_ahijados';

    public function presentacion()
    {
        return $this->belongsTo('App\Models\Presentacion');
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
