<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sacramento extends Model
{
    protected $fillable =['CODSACRAMENTO','NOMBRE','FECHA_DESCRIPCION'];
    protected $primaryKey = 'CODSACRAMENTO';
    public $timestamps = false;
    protected $table = 'sacramento';
}
