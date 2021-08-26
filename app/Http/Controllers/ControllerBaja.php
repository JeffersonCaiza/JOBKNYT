<?php

namespace App\Http\Controllers;
use App\Models\Baja;
use Illuminate\Http\Request;

class ControllerBaja extends Controller
{
    public function create(Request $request)
    {
        $baja = new Baja();
        $baja->CODBAJA = $request->CODBAJA;
        $baja->FECHA = $request->FECHA;
        $baja->save();
        
       
    }
    public function index(){
        return Baja::all();
    }

    public function show($CODBAJA)
    {
        return Baja::find($CODBAJA);
    }

    public function update(Request $request, Baja $baja)
    {
        $baja->update($request->all());
        return response()->json($baja, 200);
    }
}
