<?php

namespace App\Http\Controllers;

use App\Http\Resources\PagoCollection;
use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\DetallePago;

class PagoController extends Controller
{
    public function create(Request $request)
    {
        return Pago::create([
            'CODESTU' => $request->CODESTU,
            'FECHA_INGRESO' => $request->FECHA_INGRESO,
        ]);
    }

    public function index()
    {
        return Pago::all();
    }

    public function show($CODESTU)
    {
        return new PagoCollection(Pago::query()->where('CODESTU', $CODESTU)->get());
    }

    public function update(Request $request, Pago $pago)
    {
        $pago->update($request->all());
        return response()->json($pago, 200);
    }

}
