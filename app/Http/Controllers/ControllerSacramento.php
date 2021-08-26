<?php

namespace App\Http\Controllers;
use App\Models\Sacramento;
use Illuminate\Http\Request;

class ControllerSacramento extends Controller
{
    public function create(Request $request)
    {
        $sacramento = new Sacramento();
        $sacramento->CODSACRAMENTO = $request->CODSACRAMENTO;
        $sacramento->NOMBRE = $request->NOMBRE;
        $sacramento->FECHA = $request->FECHA;
        $sacramento->DESCRIPCION = $request->DESCRIPCION;
        $sacramento->save();
    
       
    }
    public function index(){
        return Sacramento::all();
    }

    public function show($CODSACRAMENTO)
    {
        return Sacramento::find($CODSACRAMENTO);
    }

    public function update(Request $request, Sacramento $sacramento)
    {
        $sacramento->update($request->all());
        return response()->json($sacramento, 200);
    }
}
