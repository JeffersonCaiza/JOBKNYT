<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = ['CODPAGO', 'CODESTU', 'FECHA_INGRESO'];
    protected $primaryKey = 'CODPAGO';
    public $timestamps = false;
    protected $table = 'pago';

}
