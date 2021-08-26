<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleAsignacion extends Model
{
    protected $fillable =['CODDETASIG','CODUBICACION','CODEMPLEADO','CODASIGNACION','OBSERVACIONENTREGA','OBSERVACIONRECIBE'];
    protected $primaryKey = 'CODDETASIG';
    public $timestamps = false;
    protected $table = 'detalle_asignacion';
}
