<?php

namespace App\Actions\Fortify;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
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
            'CODROL' => ['required'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'NOMBRE' => $input['NOMBRE'],
            //'APELLIDO' => $input['APELLIDO'],
            //'DIRECCION' => $input['DIRECCION'],
            //'TELEFONO' => $input['TELEFONO'],
            //'CELULAR' => $input['CELULAR'],
            //'ESTADO' => $input['ESTADO'],
            'email' => $input['email'],
            'CODROL' => $input['CODROL'],
            'password' => Hash::make($input['password']),
        ]);
    }
}