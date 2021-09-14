<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OfertaRequest;
use App\Models\Oferta;
use App\Http\Resources\Oferta as OfertaResource;
use App\Http\Resources\OfertaCollection;



class ControllerOferta extends Controller
{
    public function index()
    {
        return new OfertaCollection(Oferta::paginate(25));

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
