<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';

    // public function ficha_padrino()
    // {
    //     return $this->belongsTo('App\Post');
    // }

    // public function ficha_padrino()
    // {
    //     return $this->belongsTo('App\Post');
    // }

    public function preguntatable()
    {
        return $this->morphTo();
    }
}
