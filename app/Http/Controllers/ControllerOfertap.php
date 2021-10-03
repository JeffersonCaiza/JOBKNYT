<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OfertapRequest;
use App\Models\Oferta;
use App\Models\User;
use App\Http\Resources\Ofertap as OfertapResource;
use App\Http\Resources\OfertapCollection;

use Illuminate\Support\Facades\DB;



class ControllerOfertap extends Controller
{
    public function index()
    {
       

    }

    public function show($CODUSUARIO)
    {
        $usuarios = User::findOrFail($CODUSUARIO);

        $records['ofertas'] = DB::table('usuario')
                         ->join('ofertas', 'ofertas.CODUSUARIO', '=', 'usuario.CODUSUARIO')
                         ->where('usuario.CODUSUARIO', $usuarios->CODUSUARIO);

                        
    }

    

    
    
}