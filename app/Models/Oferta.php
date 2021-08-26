<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable =['IdOferta','NombreEmpresa','TituloOferta','DescripcionOferta','LinkTest'];
    public $timestamps = false;
    protected $primaryKey ='IdOferta';
    protected $table = 'ofertas';
}
