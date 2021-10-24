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
           
            'IdOferta'=>'required',
            'IDHOJA'=>'required',
            //'NOMBRES'=>'required',
            //'CEDULA'=>'required|numeric|digits:10',
            //'EMAIL'=>'required|email|max:255|',
            //'EDAD'=>'required|numeric|digits:2',
            //'DOMICILIO'=>'required',
            //'TELEFONOS'=>'required|numeric|digits:10',
            //'COLEGIO'=>'required',
            //'TITULOCOLEGIO'=>'required',


           
        ];

       
    }

    public function messages()
    {
        return [
            'IdOferta.required'=>'Seleccione la oferta',
            'IDHOJA.required'=>'Si no aparece tu nombre crea tu hoja de vida primero para poder postularte'
            //'NOMBRES.required'=>'Campo Obligatorio',
            //'CEDULA.required'=>'Campo Obligatorio',
            //'CEDULA.numeric'=>'Debe ser un numero',
            //'CEDULA.digits'=>'Debe tener 10 digitos',
            //'EMAIL.required'=>'Campo Obligatorio',
            //'EMAIL.email'=>'El email debe tener @',
            //'EDAD.required'=>'Campo Obligatorio',
            //'EDAD.numeric'=>'Debe ser un numero',
            //'EDAD.digits'=>'Debe tener 2 digitos y ser mayor que 16',
            //'DOMICILIO.required'=>'Campo Obligatorio',
            //'TELEFONOS.required'=>'Campo Obligatorio',
            //'TELEFONOS.numeric'=>'Debe ser un numero',
            //'TELEFONOS.digits'=>'Debe tener 10 digitos',
            //'COLEGIO.required'=>'Campo Obligatorio',
            //'TITULOCOLEGIO.required'=>'Campo Obligatorio',
            
        ];

       
    }
}