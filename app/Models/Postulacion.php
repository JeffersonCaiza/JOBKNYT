<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hoja;

class Postulacion extends Model
{
    protected $fillable =['IDPOSTULACION','IdOferta','CODUSUARIO','IDHOJA'];
    public $timestamps = false;
    protected $primaryKey ='IDPOSTULACION';
    protected $table = 'postulacion';


    public static function boot()
    {
        parent::boot();
        static::creating(function ($postulacion) {
        $postulacion->CODUSUARIO = Auth::id();
        });
    }
   

 
        public function oferta()
        {
            return $this->belongsTo('App\Models\Oferta');
        }
        
    


}