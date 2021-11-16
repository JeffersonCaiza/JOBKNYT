<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PostulacionRequest;
use App\Models\Postulacion;
use App\Models\Oferta;

use App\Http\Resources\Postulacion as PostulacionResource;
use App\Http\Resources\PostulacionCollection;

class ControllerPostulacionA extends Controller
{
    public function index()
    {
        //return new PostulacionCollection(Postulacion::paginate(25));

        //$postulacion = Postulacion::where('CODUSUARIO', '=', Auth::id() )->get();
        //return $postulacion;

        //return new PostulacionCollection(Postulacion::where('CODUSUARIO', '=', Auth::id())->get());
        //return $postulacion;

        // $postulacion = DB::table('postulacion')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $postulacion;

    }

    public function show()
    {
        //$postulacion = Postulacion::where('CODUSUARIO', '=', Auth::id() )->get();
        //return $postulacion;
        
        //return new PostulacionCollection($postulacion);

       //$postulacion = DB::table('postulacion')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $postulacion;

        $postulaciones=Postulacion::join('ofertas','ofertas.IdOferta','=','postulacion.IdOferta')
        ->where('ofertas.Estado' ,'=', 'Inactiva')
        ->where('postulacion.CODUSUARIO' ,'=',Auth::id())->get();
        

        //return new PostulacionCollection($postulaciones);

        $todo =new PostulacionCollection($postulaciones->unique('IdOferta'));

        return  $todo;


    }

    public function store(PostulacionRequest $request)
    {
        $postulaciones=DB::table('postulacion')
        ->join('ofertas','ofertas.IdOferta','=','postulacion.IdOferta')
        ->where('ofertas.IdOferta' ,'=','postulacion.IdOferta')->first();


        if( $postulaciones===null){
        $Postulacion = new Postulacion;
        $Postulacion->create($request->all());

        }else{
            return('aaaaa');
        }

        
        
        //$Postulacion = new Postulacion;
       //$Postulacion->create($request->all());

        
        
        
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