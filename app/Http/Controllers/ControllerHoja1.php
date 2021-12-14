<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\HojaRequest;
use App\Models\Hoja;
use App\Http\Resources\Hoja as HojaResource;
use App\Http\Resources\HojaCollection;




class ControllerHoja1 extends Controller
{
    public function index()
    {
        //$hoja = DB::table('hojavida')->where('CODUSUARIO', '=', Auth::id() )->get();
       // return $hoja;


        //return new OfertaCollection(Oferta::paginate(25));

        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', '12')->get();
        //return $ofertaso;

        //return Oferta::all();

        $Hoja=Hoja::where('CODUSUARIO', '=', Auth::id() )->get();
        
        

        return new HojaCollection($Hoja);

    }

    public function show()
    {
        $hoja = DB::table('hojavida')->where('CODUSUARIO', '=', Auth::id() )->get();
        return $hoja;
        //$hoja = Hoja::where('CODUSUARIO', '=', Auth::id() )->get();
        
        //return Hoja::all();
        //return new HojaCollection($hoja);

        
        //$ofertaso = DB::table('ofertas')->where('CODUSUARIO', '=', Auth::id() )->get();
        //return $ofertaso;

    }

    public function store(HojaRequest $request)
    {
        $hojas = DB::table('hojavida')->where('CODUSUARIO', '=', Auth::id() )->first();

       if($hojas===null){
        $vida = new Hoja;
        $vida->create($request->all());
       }else{
           return('aaaaa');
       }
    


       


    }

   
   
    public function update(HojaRequest $request, Hoja $id)
    {
        $id->update($request->all());
    }

    public function destroy(Hoja $id)
    {
        $id->delete();
    }

    
    
}
