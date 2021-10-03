<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Oferta;
class Postulacion extends JsonResource
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
           


            'IDPOSTULACION'=> $this->IDPOSTULACION,
            'NOMBREEMPRESA'=> $this->NOMBREEMPRESA,
            'TITULOOFERTA'=> $this->TITULOOFERTA,
            'NOMBRES'=> $this->NOMBRES,
            'CEDULA'=> $this->CEDULA,
            'EMAIL'=> $this->EMAIL,
            'COLEGIO'=> $this->COLEGIO,
            'TITULOCOLEGIO'=> $this->TITULOCOLEGIO,
            'UNIVERSIDAD'=> $this->UNIVERSIDAD,
            'TITULOUNIVERSIDAD'=> $this->TITULOUNIVERSIDAD,
            'EDAD'=> $this->EDAD,
            'DOMICILIO'=> $this->DOMICILIO,
            'CURSOA'=> $this->CURSOA,
            'NIVELA'=> $this->NIVELA,
            'CURSOB'=> $this->CURSOB,
            'NIVELB'=> $this->NIVELB,
            'EMPRESAA'=> $this->EMPRESAA,
            'FUNCIONA'=> $this->FUNCIONA,
            'AREAA'=> $this->AREAA,
            'FECHAA'=> $this->FECHAA,
            'TELEFONOA'=> $this->TELEFONOA,
            'EMPRESAB'=> $this->EMPRESAB,
            'FUNCIONB'=> $this->FUNCIONB,
            'AREAB'=> $this->AREAB,
            'FECHAB'=> $this->FECHAB,
            'TELEFONOB'=> $this->TELEFONOB,
            'NOMBREA'=> $this->NOMBREA,
            'TELEFONORA'=> $this->TELEFONORA,
            'OCUPACIONA'=> $this->OCUPACIONA,
            'NOMBREB'=> $this->NOMBREB,
            'TELEFONORB'=> $this->TELEFONORB,
            'OCUPACIONB'=> $this->OCUPACIONB,
            'TELEFONOS'=> $this->TELEFONOS,
            'IdOferta'=> Oferta::find($this->IdOferta),
            
        ];
    }
}