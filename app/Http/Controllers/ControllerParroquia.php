<?php

namespace App\Http\Controllers;
use App\Models\Parroquia;
use Illuminate\Http\Request;

class ControllerParroquia extends Controller
{
    public function create(Request $request)
    {
        $parroquia = new Parroquia();
        $parroquia->CODPARROQUIA = $request->CODPARROQUIA;
        $parroquia->NOMBRE = $request->NOMBRE;
        $parroquia->DIRECCION = $request->DIRECCION;
        $parroquia->TELEFONO = $request->TELEFONO;
        $parroquia->EMAIL = $request->EMAIL;
        $parroquia->CELULAR = $request->CELULAR;
        $parroquia->save();
    
       
    }
    public function index(){
        return Parroquia::all();
    }

    public function show($CODPARROQUIA)
    {
        return Parroquia::find($CODPARROQUIA);
    }

    public function update(Request $request, Parroquia $parroquia)
    {
        $parroquia->update($request->all());
        return response()->json($parroquia, 200);
    }
}
