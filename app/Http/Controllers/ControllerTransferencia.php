<?php

namespace App\Http\Controllers;
use App\Models\Transferencia;
use Illuminate\Http\Request;

class ControllerTransferencia extends Controller
{
    public function create(Request $request)
    {
        return Transferencia::create([
            'CODTRANSFERENCIA' => $request->CODTRANSFERENCIA,
            'FECHA' => $request->FECHA,
        ]);        
       
    }
    public function index(){
        return Transferencia::all();
    }

    public function show($CODTRANSFERENCIA)
    {
        return Transferencia::find($CODTRANSFERENCIA);
    }

    public function update(Request $request, Transferencia $transferencia)
    {
        $transferencia->update($request->all());
        return response()->json($transferencia, 200);
    }
}
