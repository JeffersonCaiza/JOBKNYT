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
            'Edad'=>'required',
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
            'Disponibilidad'=>'Campo Obligatorio',
            'EducacionMinima'=>'Campo Obligatorio',
            'Edad'=>'Campo Obligatorio',
            'FechaPubicacion'=>'Campo Obligatorio',
        ];

       
    }
}