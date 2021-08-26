<?php

namespace App\Http\Resources;

use App\Models\DetalleAsignacion;
use App\Models\Empleado;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Ubicacion;

class Articulo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        if ($this->CODDETASIG !== null) {
            $data = DetalleAsignacion::query()->where('CODDETASIG', $this->CODDETASIG)->select(['CODEMPLEADO'])->get();
            $custodio['NOMBRE'] = Empleado::find($data[0]['CODEMPLEADO'])->NOMBRE . ' ' . Empleado::find($data[0]['CODEMPLEADO'])->APELLIDO;
            $custodio['CODEMPLEADO'] = $data[0]['CODEMPLEADO'];
        } else {
            $custodio = '';
        };


        return [
            'CODARTICULO' => $this->CODARTICULO,
            'CODUBICACION' => Ubicacion::find($this->CODUBICACION),
            'CODDETASIG' => $this->CODDETASIG,
            'CODDETBAJA' => $this->CODDETBAJA,
            'NOMBRE' => $this->NOMBRE,
            'PRECIO' => $this->PRECIO,
            'DEPRECIACION' => $this->DEPRECIACION,
            'DESCRIPCION' => $this->DESCRIPCION,
            'NSERIE' => $this->NSERIE,
            'ESTADO' => $this->ESTADO,
            'CATEGORIA' => $this->CATEGORIA,
            'CUSTODIO' => $custodio,
        ];
    }
}
