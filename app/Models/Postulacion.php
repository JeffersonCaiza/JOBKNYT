<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $fillable =['IDPOSTULACION','NOMBREEMPRESA','TITULOOFERTA','NOMBRES','CEDULA','EMAIL','COLEGIO','TITULOCOLEGIO','UNIVERSIDAD','TITULOUNIVERSIDAD','EDAD',
'DOMICILIO','CURSOA','NIVELA','CURSOB','NIVELB','EMPRESAA','FUNCIONA','AREAA','FECHAA','TELEFONOA'
,'EMPRESAB','FUNCIONB','AREAB','FECHAB','TELEFONOB','NOMBREA','TELEFONORA','OCUPACIONA','NOMBREB',
'TELEFONORB','OCUPACIONB','TELEFONOS'];
    public $timestamps = false;
    protected $primaryKey ='IDPOSTULACION';
    protected $table = 'postulacion';
}