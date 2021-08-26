<?php

namespace App\Http\Controllers;

use App\Models\DetalleTransferencia;
use Illuminate\Http\Request;

class ControllerDetalleTransferencia extends Controller
{
    public function create(Request $request)
    {
        return DetalleTransferencia::create([
            'CODDETTRANS' => $request->CODDETTRANS,
            'CODEMPLEADO' => $request->CODEMPLEADO,
            'CODARTICULO' => $request->CODARTICULO,
            'CODTRANSFERENCIA' => $request->CODTRANSFERENCIA,
            'EMP_CODEMPLEADO' => $request->EMP_CODEMPLEADO,
            'CONCEPTO' => $request->CONCEPTO,
            'OBSERVACIONENTREGA' => $request->OBSERVACIONENTREGA,
            'OBSERVACIONRECIBE' => $request->OBSERVACIONRECIBE,
        ]);
    }
    public function index()
    {
        return DetalleTransferencia::all();
    }

    public function show($CODDETTRANS)
    {
        return DetalleTransferencia::find($CODDETTRANS);
    }

    public function update(Request $request, DetalleTransferencia $transferecia)
    {
        $transferecia->update($request->all());
        return response()->json($transferecia, 200);
    }
}
