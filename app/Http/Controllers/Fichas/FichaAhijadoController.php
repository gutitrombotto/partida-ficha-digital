<?php

namespace App\Http\Controllers\Fichas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PreguntaAhijado;

class FichaAhijadoController extends Controller
{
    public function panel_ahijado()
    {
        return view('ahijados.panel_ahijado');
    }

    public function prueba()
    {
        return PreguntaAhijado::all()->load('tipo_pregunta');
    }
}
