<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleBaja extends Model
{
    protected $fillable =['CODDETBAJA','CODBAJA','CODEMPLEADO','MOTIVO','OBSERVACION'];
    protected $primaryKey = 'CODDETBAJA';
    public $timestamps = false;
    protected $table = 'detalle_baja';
}
