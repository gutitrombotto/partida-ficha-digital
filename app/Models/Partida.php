<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'partidas';

    public function fichas()
    {
        return $this->hasMany('App\Models\Presentacion');
    }

    public function fichas_padrinos()
    {
        return $this->hasManyThrough('App\Models\FichaPadrino', 'App\Models\Presentacion');
    }

    public function fichas_ahijados()
    {
        return $this->hasManyThrough('App\Models\FichaAhijado', 'App\Models\Presentacion');
    }
}
