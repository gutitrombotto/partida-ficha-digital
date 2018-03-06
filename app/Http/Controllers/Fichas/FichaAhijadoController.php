<?php

namespace App\Http\Controllers\Fichas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FichaAhijadoController extends Controller
{
    public function panel_ahijado()
    {
        return view('ahijados.panel_ahijado');
    }
}
