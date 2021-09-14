<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostulacionRequest;
use App\Models\Postulacion;
use App\Http\Resources\Postulacion as PostulacionResource;
use App\Http\Resources\PostulacionCollection;

class ControllerPostulacion extends Controller
{
    public function index()
    {
        return new PostulacionCollection(Postulacion::paginate(25));

    }

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