<?php

namespace App\Http\Controllers\Partida;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Partida;
class PartidaController extends Controller
{

    public function tabla_partida(Request $request)
    {
        return view('secre.tabla_partida');
    }
    public function crear_partida(Request $request) 
    {
        $errors = $this->validar_request($request);
        if($errors) return $errors;

        $partida = new Partida();
        $partida->numero = $request->input('numero');
        if ($request->has('apodo')) {
            $partida->apodo = $request->input('apodo');
        }
        $partida->save();

        return response()->json([
            'sucess' => true,
            'mensaje' => 'Partida Creada Correctamente'
        ]);
    }

    private function validar_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'numero' => 'required|integer'
        ], [
            'numero.required' => 'El numero de la partida es requerido'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return 0;

    }
}
