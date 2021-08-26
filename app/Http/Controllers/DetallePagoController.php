<?php

namespace App\Http\Controllers;

use App\Models\DetallePago;
use App\Http\Resources\DetallePago as DetallePagoResource;
use App\Http\Resources\DetallePagoCollection;
use App\Models\Pago;
use Illuminate\Http\Request;
use Ramsey\Uuid\Exception\TimeSourceException;

class DetallePagoController extends Controller
{
    public function store(Request $request)
    {
        $pagos = Pago::create([
            'CODESTU' => $request->CODESTU,
            'FECHA_INGRESO' => $request->FECHA_INGRESO,
        ]);

        $detallePago = DetallePago::create([
            'CODDETALLEPAGO' => $request->CODDETALLEPAGO,
            'CODPAGO' => $pagos->CODPAGO,
            'VALOR' => $request->VALOR,
            'DETALLE_PAGO' => $request->DETALLE_PAGO,
            'OBSERVACION' => $request->OBSERVACION,
            'CONCEPTO' => $request->CONCEPTO,
            'NRO_COMPROBANTE' => $request->NRO_COMPROBANTE,
            'FECHA_COMPROBANTE' => $request->FECHA_COMPROBANTE,
            'ANIO_LECTIVO' => $request->ANIO_LECTIVO,
        ]);

        return $detallePago;
    }

    public function index()
    {
        return new DetallePagoCollection(DetallePago::paginate(25));
    }

    public function update(Request $request, DetallePago $detalle)
    {
        $detalle->update($request->all());
        return response()->json($detalle, 200);
    }
}
