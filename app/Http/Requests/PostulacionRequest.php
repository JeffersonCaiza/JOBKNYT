<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostulacionRequest extends FormRequest
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
            'NOMBREEMPRESA'=>'required',
            'TITULOOFERTA'=>'required',
            'NOMBRES'=>'required',
            'EMAIL'=>'required',
           
        ];

       
    }

    public function messages()
    {
        return [
            'NOMBREEMPRESA.required'=>'Campo Obligatorio',
            'TITULOOFERTA.required'=>'Campo Obligatorio',
            'NOMBRES.required'=>'Campo Obligatorio',
            'EMAIL.required'=>'Campo Obligatorio',
            
        ];

       
    }
}