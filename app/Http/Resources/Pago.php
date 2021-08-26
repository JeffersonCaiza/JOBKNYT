<?php

namespace App\Http\Resources;

use App\Models\CatalogoPagos;
use App\Models\Estudiante;
use App\Models\DetallePago;
use Illuminate\Http\Resources\Json\JsonResource;

class Pago extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $detalle = DetallePago::query()->where('CODPAGO', $this->CODPAGO)->select(['DETALLE_PAGO'])->get();
        $valor = DetallePago::query()->where('CODPAGO', $this->CODPAGO)->select(['VALOR'])->get();
        $observacion = DetallePago::query()->where('CODPAGO', $this->CODPAGO)->select(['OBSERVACION'])->get();
        $concepto = DetallePago::query()->where('CODPAGO', $this->CODPAGO)->select(['CONCEPTO'])->get();
        $nro_comprobante = DetallePago::query()->where('CODPAGO', $this->CODPAGO)->select(['NRO_COMPROBANTE'])->get();
        $anio_lectivo = DetallePago::query()->where('CODPAGO', $this->CODPAGO)->select(['ANIO_LECTIVO'])->get();
        $fecha_comprobante = DetallePago::query()->where('CODPAGO', $this->CODPAGO)->select(['FECHA_COMPROBANTE'])->get();

        return [
            'CODPAGO' => $this->CODPAGO,
            'CODESTU' => $this->CODESTU,
            'CODBANCO' => Estudiante::find(Pago::find($this->CODPAGO)->CODESTU)->CODBANCO,
            'ESTUDIANTE' => Estudiante::find(Pago::find($this->CODPAGO)->CODESTU)->NOMBRE . ' ' . Estudiante::find(Pago::find($this->CODPAGO)->CODESTU)->APELLIDO,
            'DETALLE' => $detalle[0]['DETALLE_PAGO'],
            'VALOR' => $valor[0]['VALOR'],
            'OBSERVACION' => $observacion[0]['OBSERVACION'],
            'CONCEPTO' => CatalogoPagos::find($concepto[0]['CONCEPTO'])->DESCRIPCION,
            'NRO_COMPROBANTE' => $nro_comprobante[0]['NRO_COMPROBANTE'],
            'ANIO_LECTIVO' => CatalogoPagos::find($anio_lectivo[0]['ANIO_LECTIVO'])->DESCRIPCION,
            'FECHA_COMPROBANTE' => $fecha_comprobante[0]['FECHA_COMPROBANTE'],
        ];
    }
}
