<?php

namespace App\Http\Controllers\Fichas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FichaPadrinoController extends Controller
{
    public function panel_padrino()
    {
        return view('padrinos.panel_padrino');
    }
}
