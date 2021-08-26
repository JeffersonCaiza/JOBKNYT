<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable =['CODUBICACION','CODDETASIG','CODDETBAJA','NOMBRE','PRECIO','DEPRECIACION','DESCRIPCION','NSERIE','ESTADO','CATEGORIA'];
    protected $primaryKey = 'CODARTICULO';
    public $timestamps = false;
    protected $table = 'articulo';
}
