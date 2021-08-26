<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstudianteRequest;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Resources\Estudiante as EstudianteResource;
use App\Http\Resources\EstudianteCollection;

class ControllerEstudiante extends Controller
{
    public function index()
    {
        //$per_page = $request->per_page;
        //return Estudiante::paginate($per_page);

        //return Estudiante::all();

        return new EstudianteCollection(Estudiante::paginate(25));

    }

    public function store(EstudianteRequest $request)
    {
        $estudiante = new Estudiante;
        $estudiante->create($request->all());
    }

    public function show($CODBANCO)
    {
        return DB::table('estudiante')->where('CODBANCO', $CODBANCO)->get();
    }

    public function update(EstudianteRequest $request, Estudiante $id)
    {
        $id->update($request->all());
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
    }
}
