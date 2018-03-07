<?php

namespace App\Http\Controllers\Partida;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Presentacion;
use App\Models\FichaPadrino;
use App\Models\Usuario;
use App\Models\FichaAhijado;
use App\Models\Partida;
use Validator;
class PresentacionController extends Controller
{
    public function crear_presentacion(Request $request) 
    {
        /*
            Si cumple la validacion yo tengo que:
            1. Crear una ficha para el padrino
            correspondiente con padrino_id y setear a ese usuario que es padrino.
            2. Crear una ficha para el ahijado
            correspondiente con ahijado_id y setear a ese usuario que es ahijado.

            FIX--> Corregir. Hay un loop de FK. En todo caso ponerle nullable a presentacion_id
                    a las fichas y agregarle usuario_id asi puedo crear la ficha y despues la
                    presentacion
        */
        $errors = $this->validar_creacion_presentacion($request);
        if($errors) return $errors;

        $ficha_padrino = $this->crear_ficha_padrino($request->input('padrino_id'));

        if(!$ficha_padrino){
            return $this->response_error('Error al crear ficha del Padrino');
        }

        $ficha_ahijado = $this->crear_ficha_ahijado($request->input('ahijado_id'));
        if(!$ficha_ahijado){
            return $this->response_error('Error al crear ficha del Ahijado');
        }

        $presentacion = new Presentacion();
        $partida = Partida::find($request->input('partida_id'));
        $presentacion->partida()->associate($partida);
        // $presentacion->ficha_padrino()->associate($ficha_padrino);
        // $presentacion->ficha_ahijado()->associate($ficha_ahijado);
        // $presentacion->padrino()->associate($ficha_padrino->padrino);
        // $presentacion->ahijado()->associate($ficha_ahijado->partidista);
        $saved_presentacion = $presentacion->save();
        if($saved_presentacion) {

            $ficha_ahijado->presentacion()->associate($presentacion);
            $ficha_ahijado->save();
            $ficha_padrino->presentacion()->associate($presentacion);
            $ficha_padrino->save();

            return response()->json([
                'sucess' => true,
                'mensaje' => 'Presentacion Creada Correctamente'
            ]);
        } else return $this->response_error("Error al crear presentacion");
        
    }

    public function presentaciones_partida(Request $request)
    {
        $validator = Validator::make($request->all(), [            
            'partida_id' => 'required|integer|exists:partidas,id'
        ], [
            'partida_id.required' => 'El numero de la partida es requerido',
            'partida_id.exists' => 'Esa partida no existe'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            $presentaciones = Presentacion::where('partida_id', '=', $request->input('partida_id'))->with('ficha_padrino.padrino')->get();
            // dd(get_class_methods($presentaciones));
            return $presentaciones;
        }

    }

    private function validar_creacion_presentacion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'padrino_id' => 'required|integer|exists:usuarios,id',
            'ahijado_id' => 'required|integer|exists:usuarios,id',
            'partida_id' => 'required|integer|exists:partidas,id'
        ], [
            'padrino_id.required' => 'Debe seleccionar el Usuario del Padrino',
            'ahijado_id.required' => 'Debe seleccionar el Usuario del Ahijado',
            'partida_id.required' => 'El numero de la partida es requerido',
            
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return 0;
    }

    private function crear_ficha_padrino($padrino_id)
    {
        $ficha_pa = new FichaPadrino();
        $padrino = Usuario::find($padrino_id);
        $padrino->es_padrino = 1;
        $padrino->save();
        $ficha_pa->padrino()->associate($padrino);
        $ficha_pa->save();
        return $ficha_pa;

    }

    private function crear_ficha_ahijado($ahijado_id)
    {
        $ficha_ah = new FichaAhijado();
        $partidista = Usuario::find($ahijado_id);
        $partidista->es_ahijado = 1;
        $partidista->save();
        $ficha_ah->partidista()->associate($partidista);
        $ficha_ah->save();
        return $ficha_ah;
       
        
    }

    private function response_error($mensaje) 
    {
        return response()->json([
            'sucess' => false,
            'mensaje' => $mensaje
        ]);

    }
}
