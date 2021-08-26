<?php

namespace App\Http\Controllers;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class ControllerUbicacion extends Controller
{
    public function create(Request $request)
    {
        $ubicacion = new Ubicacion();
        $ubicacion->CODUBICACION = $request->CODUBICACION;
        $ubicacion->NOMBRE = $request->NOMBRE;
        $ubicacion->DESCRIPCION = $request->DESCRIPCION;
        $ubicacion->save();
      
    
       
    }
    public function index(){
        return Ubicacion::all();
    }

    public function show($CODUBICACION)
    {
        return Ubicacion::find($CODUBICACION);
    }

    public function update(Request $request, Ubicacion $ubicacion)
    {
        $ubicacion->update($request->all());
        return response()->json($ubicacion, 200);
    }
}
