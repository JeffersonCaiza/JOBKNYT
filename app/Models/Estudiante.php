<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable =['CEDULA','NOMBRE','APELLIDO','DIRECCION','EMAIL','TELEFONO','CELULAR','CODBANCO'];
    public $timestamps = false;
    protected $primaryKey ='CODESTU';
    protected $table = 'estudiante';
}
