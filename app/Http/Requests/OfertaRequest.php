<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfertaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'NombreEmpresa'=>'required',
            'TituloOferta'=>'required',
            'DescripcionOferta'=>'required',
            'LinkTest'=>'required',
            'Disponibilidad'=>'required',
            'EducacionMinima'=>'required',
            'Edad'=>'numeric|required|digits:2',
            'FechaPubicacion'=>'required',
        ];

       
    }

    public function messages()
    {
        return [
            'NombreEmpresa.required'=>'Campo Obligatorio',
            'TituloOferta.required'=>'Campo Obligatorio',
            'DescripcionOferta.required'=>'Campo Obligatorio',
            'LinkTest.required'=>'Campo Obligatorio',
            'Disponibilidad.required'=>'Campo Obligatorio',
            'EducacionMinima.required'=>'Campo Obligatorio',
            'Edad.required'=>'Campo Obligatorio',
            'Edad.numeric'=>'Solo ingresar numeros',
            'Edad.digits'=>'Debe tener 2 digitos y ser mayor que 16',
            'FechaPubicacion.required'=>'Campo Obligatorio',
        ];

       
    }
}