<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UsuarioCollection;
use Illuminate\Support\Facades\DB;

class ControllerUsuario extends Controller
{
    public function index()
    {
        
       
        
        return new UsuarioCollection(User::paginate(25));

        //$noveles = DB::table('usuario')->whereCODROL('2')->first();
        //return $noveles;
        
        //$noveles = DB::table('usuario')->where('CODROL', '=', '3')->get();
        //return $noveles;

        //return User::all();

        
    }

    public function show()
    {
        //return User::all();
        $noveles = DB::table('usuario')->where('CODROL', '=', '3')->get();
        return $noveles;

    }

    

    public function destroy(User $id)
    {
        $id->delete();
    }

    
    
}