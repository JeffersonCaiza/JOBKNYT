<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param mixed $user
     * @param array $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'NOMBRE' => ['required', 'string', 'max:255'],
            //'APELLIDO' => ['string', 'max:255'],
           // 'DIRECCION' => ['max:255'],
           // 'TELEFONO' => ['max:255'],
           // 'CELULAR' => ['max:255'],
            //'ESTADO' => ['max:255'],
            //'CODROL' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                
                Rule::unique('usuario')->ignore($user->CODUSUARIO, 'CODUSUARIO')
            ],

        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'NOMBRE' => $input['NOMBRE'],
                //'APELLIDO' => $input['APELLIDO'],
              //  'DIRECCION' => $input['DIRECCION'],
               // 'TELEFONO' => $input['TELEFONO'],
              //  'CELULAR' => $input['CELULAR'],
              //  'ESTADO' => $input['ESTADO'],
              //  'CODROL' => $input['CODROL'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param mixed $user
     * @param array $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'NOMBRE' => $input['NOMBRE'],
            'APELLIDO' => $input['APELLIDO'],
            'DIRECCION' => $input['DIRECCION'],
            'TELEFONO' => $input['TELEFONO'],
            'CELULAR' => $input['CELULAR'],
            'ESTADO' => $input['ESTADO'],
            'CODROL' => $input['CODROL'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}