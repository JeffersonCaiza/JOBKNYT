<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
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
            'NOMBRE'=>'required',
            'APELLIDO'=>'required',
            'CODBANCO'=>'required'
        ];

       
    }

    public function messages()
    {
        return [
            'NOMBRE.required'=>'Campo Obligatorio',
            'APELLIDO.required'=>'Campo Obligatorio',
            'CODBANCO.required'=>'Campo Obligatorio'
        ];

       
    }
}