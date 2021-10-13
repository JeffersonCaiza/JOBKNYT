<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterEmpresaController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'NOMBRE' => ['required', 'string', 'max:255'],
            //'APELLIDO' => ['digits:10','numeric'],
            //'DIRECCION' => ['max:255'],
            //'TELEFONO' => ['digits:7','numeric'],
            //'CELULAR' => ['digits:10','numeric'],
            //'ESTADO' => ['max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                
                Rule::unique(User::class),
            ],
            //'CODROL' => ['required'],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
        ]);
        User::create([
            'NOMBRE' => $request['NOMBRE'],
            //'APELLIDO' => $request['APELLIDO'],
            //'DIRECCION' => $request['DIRECCION'],
            //'TELEFONO' => $request['TELEFONO'],
            //'CELULAR' => $request['CELULAR'],
            //'ESTADO' => $request['ESTADO'],
            'email' => $request['email'],
            'CODROL' => 3,
            'password' => Hash::make($request['password']),
        ]);
    }

    public function index()
    {
        return view('home');
    }
}
