<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoPagos extends Model
{
    protected $fillable =['CODCATALOGO','DESCRIPCION','CATALOGO_MENU_ID'];
    protected $primaryKey = 'CODCATALOGO';
    public $timestamps = false;
    protected $table = 'catalogo_pagos';
}
