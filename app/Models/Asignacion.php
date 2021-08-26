<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $fillable =['CODASIGNACION','CODTRANSFERENCIA','FECHA'];
    protected $primaryKey = 'CODASIGNACION';
    public $timestamps = false;
    protected $table = 'asignacion';
}
