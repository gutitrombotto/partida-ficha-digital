<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Usuario;
class UsuariosController extends Controller
{
    public function autocomplete (Request $request)
    {

        $query=$request->input('query');
        $usuarios = Usuario::where('nombre', 'LIKE', '%'.$query.'%')
                    ->take(10)
                    ->get();
        // return $usuarios;
        // return get_class_methods($usuarios);
        return response()->json($usuarios);
    }

    public function lista_usuarios(Request $request)
    {
        return response()->json(Usuario::paginate());
    }
}
