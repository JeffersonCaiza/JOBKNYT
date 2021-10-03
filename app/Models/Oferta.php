<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable =['NombreEmpresa','TituloOferta','DescripcionOferta','LinkTest','Disponibilidad','EducacionMinima','Edad','FechaPubicacion','CODUSUARIO'];
    public $timestamps = false;
    protected $primaryKey ='IdOferta';
    protected $table = 'ofertas';
}
