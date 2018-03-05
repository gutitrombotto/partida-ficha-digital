<?php

namespace App\Http\Controllers\Secre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecreController extends Controller
{
    public function panel_secre()
    {
        return view('secre.panel_secre');
    }
}
