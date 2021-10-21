<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\OfertaRequest;
use App\Models\Oferta;
use App\Http\Resources\Oferta as OfertaResource;
use App\Http\Resources\OfertaCollection;




class ControllerOfertap extends Controller
{
    public function index()
    {
        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $ofertaso;


        //return new OfertaCollection(Oferta::paginate(25));

        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', '12')->get();
        //return $ofertaso;

        //return Oferta::all();

        $Oferta=Oferta::where('Estado','=','Activa')->get();
        
        

        return new OfertaCollection($Oferta);

    }

    public function show()
    {
        $hoja = DB::table('ofertas')->where('Estado', '=', 'Activa' )->get();
        return $hoja;
        //return new OfertaCollection(Oferta::paginate(25));

        
        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $ofertaso;

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