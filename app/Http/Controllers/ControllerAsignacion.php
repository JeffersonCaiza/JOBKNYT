<?php

namespace App\Http\Controllers;
use App\Models\Asignacion;
use Illuminate\Http\Request;

class ControllerAsignacion extends Controller
{
    public function create(Request $request)
    {
        $asignacion = new Asignacion();
        $asignacion->CODASIGNACION = $request->CODASIGNACION;
        $asignacion->CODTRANSFERENCIA = $request->CODTRANSFERENCIA;
        $asignacion->FECHA = $request->FECHA;
        $asignacion->save();
       
    }
    public function index(){
        return Asignacion::all();
    }

    public function show($CODASIGNACION)
    {
        return Asignacion::find($CODASIGNACION);
    }

    public function update(Request $request, Asignacion $asignacion)
    {
        $asignacion->update($request->all());
        return response()->json($asignacion, 200);
    }
}
