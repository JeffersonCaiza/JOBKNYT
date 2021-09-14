<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $fillable =['IDPOSTULACION','NOMBREEMPRESA','TITULOOFERTA','NOMBRES','CEDULA','EMAIL','COLEGIO','TITULOCOLEGIO','UNIVERSIDAD','TITULOUNIVERSIDAD'];
    public $timestamps = false;
    protected $primaryKey ='IDPOSTULACION';
    protected $table = 'postulacion';
}