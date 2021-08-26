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
            'APELLIDO' => ['max:255'],
            'DIRECCION' => ['max:255'],
            'TELEFONO' => ['max:255'],
            'CELULAR' => ['max:255'],
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
            'APELLIDO' => $input['APELLIDO'],
            'DIRECCION' => $input['DIRECCION'],
            'TELEFONO' => $input['TELEFONO'],
            'CELULAR' => $input['CELULAR'],
            'ESTADO' => 1,
            'email' => $input['email'],
            'CODROL' => $input['CODROL'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
