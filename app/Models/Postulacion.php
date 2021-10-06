<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $fillable =['IDPOSTULACION','NOMBREEMPRESA','TITULOOFERTA','NOMBRES','CEDULA','EMAIL','COLEGIO','TITULOCOLEGIO','UNIVERSIDAD','TITULOUNIVERSIDAD','EDAD',
'DOMICILIO','CURSOA','NIVELA','CURSOB','NIVELB','EMPRESAA','FUNCIONA','AREAA','FECHAA','TELEFONOA'
,'EMPRESAB','FUNCIONB','AREAB','FECHAB','TELEFONOB','NOMBREA','TELEFONORA','OCUPACIONA','NOMBREB',
'TELEFONORB','OCUPACIONB','TELEFONOS','IdOferta','CODUSUARIO'];
    public $timestamps = false;
    protected $primaryKey ='IDPOSTULACION';
    protected $table = 'postulacion';


    public static function boot()
    {
        parent::boot();
        static::creating(function ($postulacion) {
        $postulacion->CODUSUARIO = Auth::id();
        });
    }
}