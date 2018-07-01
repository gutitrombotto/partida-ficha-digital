<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'partidas';

    public function presentaciones()
    {
        return $this->hasMany('App\Models\Presentacion');
    }

    public function presentaciones()
    {
        return $this->hasMany('App\Models\Codigo');
    }

}
