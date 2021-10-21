<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\DB;

use App\Http\Requests\OfertaRequest;
use App\Models\Oferta;
use App\Http\Resources\Oferta as OfertaResource;
use App\Http\Resources\OfertaCollection;




class ControllerOfertad extends Controller
{
    public function index()
    {
        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $ofertaso;


        return new OfertaCollection(Oferta::paginate(25));

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
