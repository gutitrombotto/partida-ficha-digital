<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $table = 'presentaciones';

    public function partida()
    {
        return $this->belongsTo('App\Models\Partida');
    }

    public function ficha_padrino()
    {
        return $this->hasOne('App\Models\FichaPadrino');
    }

    public function ficha_ahijado()
    {
        return $this->hasOne('App\Models\FichaAhijado');
    }

    public function padrino()
    {
        return $this->hasOne('App\Models\Usuario');       
    }

    public function ahijado()
    {
        return $this->hasOne('App\Models\Usuario');       
    }
    
}
