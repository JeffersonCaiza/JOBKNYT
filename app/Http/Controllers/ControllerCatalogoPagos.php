<?php

namespace App\Http\Controllers;
use App\Models\CatalogoPagos;
use Illuminate\Http\Request;

class ControllerCatalogoPagos extends Controller
{
    public function create(Request $request)
    {
        $catalogo = new CatalogoPagos();
        $catalogo->CODCATALOGO = $request->CODCATALOGO;
        $catalogo->DESCRIPCION = $request->DESCRIPCION;
        $catalogo->CATALOGO_MENU_ID = $request->CATALOGO_MENU_ID;
        $catalogo->save();
    }
    public function index(){
        return CatalogoPagos::all();
    }

    public function show($CODCATALOGO)
    {
        return CatalogoPagos::find($CODCATALOGO);
    }

    public function update(Request $request, CatalogoPagos $catalogo)
    {
        $catalogo->update($request->all());
        return response()->json($catalogo, 200);
    }
}
