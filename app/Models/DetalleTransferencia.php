<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTransferencia extends Model
{
    protected $fillable =['CODDETTRANS','CODEMPLEADO','CODARTICULO','CODTRANSFERENCIA','EMP_CODEMPLEADO','CONCEPTO','OBSERVACIONENTREGA','OBSERVACIONRECIBE'];
    protected $primaryKey = 'CODDETTRANS';
    public $timestamps = false;
    protected $table = 'detalle_transferencia';
}
