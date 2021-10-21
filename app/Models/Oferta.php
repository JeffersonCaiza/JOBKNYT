<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Oferta extends Model
{
    protected $fillable =['NombreEmpresa','TituloOferta','DescripcionOferta','LinkTest','Disponibilidad','EducacionMinima','Edad','FechaPubicacion','CODUSUARIO',
    'FechaPublicacionFin','Requisitos','Beneficios','Cualidades','Estado'];
    public $timestamps = false;
    protected $primaryKey ='IdOferta';
    protected $table = 'ofertas';


    public static function boot()
    {
        parent::boot();
        static::creating(function ($ofertas) {
        $ofertas->CODUSUARIO = Auth::id();
        });
    }



    
}


