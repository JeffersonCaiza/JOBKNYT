<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class ControllerRol extends Controller
{
    public function create(Request $request)
    {
        $rol = new Rol();
        $rol->NOMBRE = $request->NOMBRE;
        $rol->DESCRIPCION = $request->DESCRIPCION;

        $rol->save();
    }

    public function index()
    {
        return Rol::all();
    }

    public function show($CODROL)
    {
        return Rol::find($CODROL);
    }

    public function update(Request $request, Rol $rol)
    {
        $rol->update($request->all());
        return response()->json($rol, 200);
    }
}
