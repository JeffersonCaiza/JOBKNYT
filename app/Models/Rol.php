<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable =['CODROL','NOMBRE','DESCRIPCION'];
    protected $primaryKey = 'CODROL';
    public $timestamps = false;
    protected $table = 'rol';
}
