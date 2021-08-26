<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleBaja;
class ControllerDetalleBaja extends Controller
{
    public function create(Request $request)
    {
        $baja = new DetalleBaja();
        $baja->CODDETBAJA = $request->CODDETBAJA;
        $baja->CODBAJA = $request->CODBAJA;
        $baja->CODEMPLEADO = $request->CODEMPLEADO;
        $baja->MOTIVO = $request->MOTIVO;
        $baja->OBSERVACION = $request->OBSERVACION;
        $baja->save();

        
    }
    public function index(){
        return DetalleBaja::all();
    }

    public function show($CODDETBAJA)
    {
        return DetalleBaja::find($CODDETBAJA);
    }

    public function update(Request $request, DetalleBaja $baja)
    {
        $baja->update($request->all());
        return response()->json($baja, 200);
    }
}
