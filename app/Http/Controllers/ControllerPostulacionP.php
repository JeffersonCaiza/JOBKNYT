<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PostulacionRequest;
use App\Models\Postulacion;

use App\Models\Oferta;

//use App\Http\Resources\Postulacion as PostulacionResource;
//use App\Http\Resources\PostulacionCollection;

class ControllerPostulacionP extends Controller
{
    public function index()
    {
        $postulaciones=DB::table('postulacion')
        ->join('ofertas','ofertas.IdOferta','=','postulacion.IdOferta')
        ->where('ofertas.CODUSUARIO' ,'=',Auth::id())->get();
        return $postulaciones;
      
       

    }

    //public function show()
    //{
        //return new PostulacionCollection(Postulacion::paginate(25));

       // $postulacion = DB::table('postulacion')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $postulacion;

    //}

    public function store(PostulacionRequest $request)
    {
        $Postulacion = new Postulacion;
        $Postulacion->create($request->all());
    }

    public function update(PostulacionRequest $request, Postulacion $id)
    {
        $id->update($request->all());
    }

    public function destroy(Postulacion $id)
    {
        $id->delete();
    }

    
    
}