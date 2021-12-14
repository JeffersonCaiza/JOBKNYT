<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


use App\Models\Oferta;
use App\Models\User;
use App\Models\Hoja;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        //$postulaciones=DB::table('postulacion')
        //->join('hojavida','hojavida.IDHOJA','=','postulacion.IDHOJA')
        //->where('hojavida.CODUSUARIO' ,'=',Auth::id())->get();

        //$postulaciones=DB::table('hojavida')
        //->join('postulacion','postulacion.IDHOJA','=','hojavida.IDHOJA')
        //->where('hojavida.CODUSUARIO' ,'=',Auth::id())->get();

        //$hoj=$postulaciones->IDHOJA;

       

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
            //'IdOferta'=> Oferta::find(User::find($this->IdOferta)),
            'CODUSUARIO'=> User::find($this->CODUSUARIO),
            'IDHOJA'=> Hoja::find($this->IDHOJA), 
            //'IDHOJA'=> Hoja::find(User::find($this->IDHOJA)),
            //'IDHOJA'=> 17,
            'CODUSUARIOH' => Hoja::find($this->CODUSUARIOH), 
        ];
    }
}