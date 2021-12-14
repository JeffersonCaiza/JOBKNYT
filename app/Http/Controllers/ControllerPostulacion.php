<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Collection;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PostulacionRequest;
use App\Models\Postulacion;
use App\Models\Oferta;

use App\Http\Resources\Postulacion as PostulacionResource;
use App\Http\Resources\PostulacionCollection;

class ControllerPostulacion extends Controller
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

        $postulaciones=DB::table('postulacion')
        ->join('ofertas','ofertas.IdOferta','=','postulacion.IdOferta')
        ->where('ofertas.Estado' ,'=', 'Activa')
        ->where('postulacion.CODUSUARIO' ,'=',Auth::id())
        ->distinct('IdOferta')
        ->get();
        return $postulacionesa=$postulaciones->unique('IdOferta');

    }

    public function show()
    {
        //$postulacion = Postulacion::where('CODUSUARIO', '=', Auth::id() )->get();
        
        
        //return new PostulacionCollection($postulacion);

       //$postulacion = DB::table('postulacion')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $postulacion;
        //Postulacion::distinct()->get(['IdOferta']);

        $postulaciones=Postulacion::join('ofertas','ofertas.IdOferta','=','postulacion.IdOferta')
        ->where('ofertas.Estado' ,'=', 'Activa')
        ->where('postulacion.CODUSUARIO' ,'=',Auth::id())
        //->distinct()
        //->select('postulacion')
        //->distinct('postulacion.IdOferta')
        ->get();

        
        
        //$postulaciones=$postulaciones->unique('IdOferta');


        //return new PostulacionCollection($postulaciones);

        $todo =new PostulacionCollection($postulaciones->unique('IdOferta'));

        return  $todo;

        

    }

    public function store(PostulacionRequest $request)
    {
       //$postulaciones=DB::table('postulacion')
        //->join('ofertas','ofertas.IdOferta','=','postulacion.IdOferta')
        //->where('postulacion.CODUSUARIO ' ,'=',Auth::id())->get();




       //if( $postulaciones===null){
        $Postulacion = new Postulacion;
        $Postulacion->create($request->all());

        //}else{
          //  return('aaaaa');
       //}

        
        
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