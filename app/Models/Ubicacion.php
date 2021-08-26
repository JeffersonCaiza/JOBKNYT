<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $fillable =['NOMBRE','DESCRIPCION'];
    protected $primaryKey = 'CODUBICACION';
    public $timestamps = false;
    protected $table = 'ubicacion';
}
