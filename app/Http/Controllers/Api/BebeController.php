<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bebe;

class BebeController extends Controller
{
    public function bebes(){
        $bebes = Bebe::all();
        return response()->json($bebes, 200);
    }

    public function crearBebe(Request $request){  
        $bebes = new Bebe($request->input());
        $bebes->save();
        return response()->json([
            'message' => 'Bebe guardado exitosamente!',
            'id' =>  $bebes->id
        ], 200);
    }
}
