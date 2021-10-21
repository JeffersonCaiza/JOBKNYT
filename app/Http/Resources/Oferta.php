<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;



use App\Models\User;

class Oferta extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

       

        return [
            
            'NombreEmpresa'=> $this->NombreEmpresa,
            'TituloOferta'=> $this->TituloOferta,
            'DescripcionOferta'=> $this->DescripcionOferta,
            'LinkTest'=> $this->NOLinkTestMBRES,
            'Disponibilidad'=> $this->Disponibilidad,
            'EducacionMinima'=> $this->EducacionMinima,
            'Edad'=> $this->COLEGIO,
            'FechaPubicacion'=> $this->FechaPubicacion,
            'CODUSUARIO'=> User::find($this->CODUSUARIO),
            'FechaPublicacionFin'=> $this->FechaPublicacionFin,
            'Requisitos'=> $this->Requisitos,
            'Beneficios'=> $this->Beneficios,
            'Cualidades'=> $this->Cualidades,
            'Estado'=> $this->Estado,
            
        ];
    }
}