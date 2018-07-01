<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $table = 'presentaciones';

    public function partida()
    {
        return $this->belongsTo('App\Models\Partida', 'partida_id');
    }

    public function padrino()
    {
        return $this->hasOne('App\Models\Usuario', 'padrino_id');
    }

    public function ahijado()
    {
        return $this->hasOne('App\Models\Usuario', 'ahijado_id');
    }

}
