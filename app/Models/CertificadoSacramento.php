<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificadoSacramento extends Model
{
    protected $fillable =['CODCERTSACRA','CODPARROQUIA','CODSACRAMENTO','CODESTU'];
    protected $primaryKey = 'CODCERTSACRA';
    public $timestamps = false;
    protected $table = 'certificado_sacramento';
}
