<?php

namespace App\Http\Controllers;
use App\Models\CertificadoSacramento;
use Illuminate\Http\Request;

class ControllerCertificadoSacramento extends Controller
{
    public function create(Request $request)
    {
        $certificado = new CertificadoSacramento();
        $certificado->CODCERTSACRA = $request->CODCERTSACRA;
        $certificado->CODPARROQUIA = $request->CODPARROQUIA;
        $certificado->CODSACRAMENTO = $request->CODSACRAMENTO;
        $certificado->CODESTU = $request->CODESTU;
        $certificado->save();
        
    }
    public function index(){
        return CertificadoSacramento::all();
    }

    public function show($CODCERTSACRA)
    {
        return CertificadoSacramento::find($CODCERTSACRA);
    }

    public function update(Request $request, CertificadoSacramento $certificado)
    {
        $certificado->update($request->all());
        return response()->json($certificado, 200);
    }
}
