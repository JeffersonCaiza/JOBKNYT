<?php

namespace App\Http\Controllers;

use App\Models\DetalleAsignacion;
use App\Moddels\Asignacion;
use App\Models\Asignacion as ModelsAsignacion;
use Illuminate\Http\Request;

class ControllerDetalleAsignacion extends Controller
{
    public function create(Request $request)
    {
        $asignacion = ModelsAsignacion::create([
            'CODASIGNACION' => $request->CODASIGNACION,
            'CODTRANSFERENCIA' => $request->CODTRANSFERENCIA,
            'FECHA' => $request->FECHA,
        ]);

        $detalleAsignacion = DetalleAsignacion::create([
            'CODDETASIG' => $request->CODDETASIG,
            'CODUBICACION' => $request->CODUBICACION,
            'CODEMPLEADO' => $request->CODEMPLEADO,
            'CODASIGNACION' => $asignacion->CODASIGNACION,
            'OBSERVACIONENTREGA' => $request->OBSERVACIONENTREGA,
            'OBSERVACIONRECIBE' => $request->OBSERVACIONRECIBE,
        ]);

        return $detalleAsignacion;
    }

    public function index()
    {
        return DetalleAsignacion::all();
    }

    public function show($CODDETASIG)
    {
        return DetalleAsignacion::find($CODDETASIG);
    }

    public function update(Request $request, DetalleAsignacion $asignacion)
    {
        $asignacion->update($request->all());
        return response()->json($asignacion, 200);
    }
}
