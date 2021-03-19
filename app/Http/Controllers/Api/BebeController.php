<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bebe;
use Illuminate\Support\Facades\Log;

class BebeController extends Controller
{
    public function bebes()
    {
        $bebes = Bebe::all();
        return response()->json($bebes, 200);
    }

    public function crearBebe(Request $request)
    {
        $bebes = new Bebe($request->input());
        $bebes->save();
        return response()->json([
            'message' => 'Bebe guardado exitosamente!',
            'id' =>  $bebes->id
        ], 200);
    }

    public function editarBebe(Request $request)
    {
        // Manejador de errores
        try {
            // validar existencia de bebe
            if (!$request->input('id')) {
                return response()->json(['message' =>'Se necesita el parametro Id'], 400);
            }
            $bebe = Bebe::findOrFail($request->input('id'));
            $bebe->setBebe($request);
            $bebe->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => $e->getMessage()], 400);
        }

        return response()->json([
            'message' => 'Bebe editado exitosamente!',
            'bebe' =>  $bebe->nombre
        ], 200);
    }

    public function eliminarBebe(Request $request)
    {
        try {
            $bebe = Bebe::findOrFail($request->input('id'));
            $bebe->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => $e->getMessage()], 400);
        }

        return response()->json([
            'message' => 'Bebe eliminado exitosamente!',
        ], 200);
    }
}
