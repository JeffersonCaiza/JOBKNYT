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
          
            'TituloOferta'=>'required',
            'DescripcionOferta'=>'required',
            //'LinkTest'=>'required',
            'Disponibilidad'=>'required',
            'EducacionMinima'=>'required',
            'Edad'=>'required',
            'FechaPubicacion'=>'required',
            'FechaPublicacionFin'=>'required',
        ];

       
    }

    public function messages()
    {
        return [
            
            'TituloOferta.required'=>'Campo Obligatorio',
            'DescripcionOferta.required'=>'Campo Obligatorio',
            //'LinkTest.required'=>'Campo Obligatorio',
            'Disponibilidad.required'=>'Campo Obligatorio',
            'EducacionMinima.required'=>'Campo Obligatorio',
            'Edad.required'=>'Campo Obligatorio',
            //'Edad.numeric'=>'Solo ingresar numeros',
            //'Edad.digits'=>'Debe tener 2 digitos y ser mayor que 16',
            'FechaPubicacion.required'=>'Campo Obligatorio',
            'FechaPublicacionFin.required'=>'Campo Obligatorio',
        ];

       
    }
}