<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baja extends Model
{
    protected $fillable =['CODBAJA','FECHA'];
    protected $primaryKey = 'CODBAJA';
    public $timestamps = false;
    protected $table = 'baja';
}
