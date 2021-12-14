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




class ControllerEmpreIna extends Controller
{
    public function index()
    {
        $ofertaso = DB::table('ofertas')
        ->where('Estado', '=', 'Inactiva')
        ->where('CODUSUARIO', '=', Auth::id() )
        ->get();
        
        
        return $ofertaso;


        //return new OfertaCollection(Oferta::paginate(25));

        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', '12')->get();
        //return $ofertaso;

        //return Oferta::all();

    }

    public function show()
    {
        //return Oferta::all();
        //return new OfertaCollection(Oferta::paginate(25));

        
        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $ofertaso;

        $postulaciones=Postulacion::join('ofertas','ofertas.IdOferta','=','postulacion.IdOferta')
        ->where('ofertas.Estado' ,'=', 'Inactiva')
        ->where('ofertas.CODUSUARIO' ,'=',Auth::id())->get();
        

        //return new PostulacionCollection($postulaciones);

        $todo =new PostulacionCollection($postulaciones->unique('postulacion.IDHOJA'));

        return  $todo;


    }

    public function store(OfertaRequest $request)
    {
        $oferta = new Oferta;
        $oferta->create($request->all());


    }

   
   
    public function update(OfertaRequest $request, Oferta $id)
    {
        $id->update($request->all());
    }

    public function destroy(Oferta $id)
    {
        $id->delete();
    }

    
    
}
