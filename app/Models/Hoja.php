<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoja extends Model
{
    protected $fillable =['IDHOJA','NOMBRESC','CEDULA','EMAIL','COLEGIO','TITULOCOLEGIO','UNIVERSIDAD','TITULOUNIVERSIDAD','EDAD',
'DOMICILIO','CURSOA','NIVELA','CURSOB','NIVELB','EMPRESAA','FUNCIONA','AREAA','FECHAA','FECHAAA','TELEFONOA'
,'EMPRESAB','FUNCIONB','AREAB','FECHAB','FECHABB','TELEFONOB','NOMBREA','TELEFONORA','OCUPACIONA','NOMBREB',
'TELEFONORB','OCUPACIONB','TELEFONOS','CODUSUARIO',];
    public $timestamps = false;
    protected $primaryKey ='IDHOJA';
    protected $table = 'hojavida';


    public static function boot()
    {
        parent::boot();
        static::creating(function ($hoja) {
        $hoja->CODUSUARIO = Auth::id();
        });
    }

   

 
        
        
    


}