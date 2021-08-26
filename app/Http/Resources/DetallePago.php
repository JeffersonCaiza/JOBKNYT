<?php

namespace App\Http\Resources;

use App\Models\CatalogoPagos;
use App\Models\Estudiante;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Pago;

class DetallePago extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'CODDETALLEPAGO' => $this->CODDETALLEPAGO,
            'CODPAGO' => $this->CODPAGO,
            'CODBANCO' => Estudiante::find(Pago::find($this->CODPAGO)->CODESTU)->CODBANCO,
            'ESTUDIANTE' => Estudiante::find(Pago::find($this->CODPAGO)->CODESTU)->NOMBRE . ' ' . Estudiante::find(Pago::find($this->CODPAGO)->CODESTU)->APELLIDO,
            'DETALLE' => $this->DETALLE_PAGO,
            'VALOR' => $this->VALOR,
            'OBSERVACION' => $this->OBSERVACION,
            'CONCEPTO' => CatalogoPagos::find($this->CONCEPTO)->DESCRIPCION,
            'NRO_COMPROBANTE' => $this->NRO_COMPROBANTE,
            'ANIO_LECTIVO' => CatalogoPagos::find($this->ANIO_LECTIVO)->DESCRIPCION,
            'FECHA_COMPROBANTE' => $this->FECHA_COMPROBANTE,
        ];
    }
}
