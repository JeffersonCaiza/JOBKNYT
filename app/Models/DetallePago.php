<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePago extends Model
{
    protected $fillable = ['CODDETALLEPAGO', 'CODPAGO', 'VALOR', 'DETALLE_PAGO', 'OBSERVACION', 'CONCEPTO', 'NRO_COMPROBANTE', 'FECHA_COMPROBANTE', 'ANIO_LECTIVO'];
    protected $primaryKey = 'CODDETALLEPAGO';
    public $timestamps = false;
    protected $table = 'detalle_pago';

}
