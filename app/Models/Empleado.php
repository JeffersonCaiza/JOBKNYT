<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable =['CODEMPLEADO','FECHAINGRESO','FECHASALIDA','CARGO','MATERIAS','CURSO','MOTIVO'];
    protected $primaryKey = 'CODEMPLEADO';
    public $timestamps = false;
    protected $table = 'empleado';
}
