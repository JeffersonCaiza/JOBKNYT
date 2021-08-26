<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $fillable =['CODPARROQUIA','NOMBRE','DIRECCION','TELEFONO','EMAIL','CELULAR'];
    protected $primaryKey = 'CODPARROQUIA';
    public $timestamps = false;
    protected $table = 'parroquia';
}
