<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
class ControllerEmpleado extends Controller
{
    public function create(Request $request)
    {
        $empleado = new Empleado();
        $empleado->CODEMPLEADO = $request->CODEMPLEADO;
        $empleado->FECHAINGRESO = $request->FECHAINGRESO;
        $empleado->FECHASALIDA = $request->FECHASALIDA;
        $empleado->CARGO = $request->CARGO;
        $empleado->MATERIAS = $request->MATERIAS;
        $empleado->CURSO = $request->CURSO;
        $empleado->MOTIVO = $request->MOTIVO;
        $empleado->save();
        
       
    }
    public function index(){
        return Empleado::all();
    }

    public function show($CODEMPLEADO)
    {
        return Empleado::find($CODEMPLEADO);
    }

    public function update(Request $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return response()->json($empleado, 200);
    }
}
