<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HojaRequest extends FormRequest
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
           
            //'IdOferta'=>'required',
            'NOMBRESC'=>'required',
            'CEDULA'=>'required|numeric|digits:10',
            'EMAIL'=>'required|email|max:255|',
            'EDAD'=>'required|numeric|digits:2',
            'DOMICILIO'=>'required',
            'TELEFONOS'=>'required|numeric|digits:10',
            'COLEGIO'=>'required',
            'TITULOCOLEGIO'=>'required',
            //'TELEFONOA'=>'digits:10',    
           // 'TELEFONOB'=>'digits:10',
           // 'TELEFONORA'=>'digits:10',
           // 'TELEFONORB'=>'digits:10',
            //'CODUSUARIO'=>Rule::unique('hojavida')->ignore($this->route('id'))


           
        ];

       
    }

    public function messages()
    {
        return [
            //'IdOferta.required'=>'Seleccione la oferta a la cual desea postularse',
            'NOMBRESC.required'=>'Campo Obligatorio',
            'CEDULA.required'=>'Campo Obligatorio',
            'CEDULA.numeric'=>'Debe ser un numero',
            'CEDULA.digits'=>'Debe tener 10 digitos',
            'EMAIL.required'=>'Campo Obligatorio',
            'EMAIL.email'=>'Ingrese un correo electronico valido',
            'EDAD.required'=>'Campo Obligatorio',
            'EDAD.numeric'=>'Debe ser un numero',
            'EDAD.digits'=>'Debe tener 2 digitos y ser mayor que 16',
            'DOMICILIO.required'=>'Campo Obligatorio',
            'TELEFONOS.required'=>'Campo Obligatorio',
            'TELEFONOS.numeric'=>'Debe ser un numero',
            'TELEFONOS.digits'=>'Debe tener 10 digitos',
            'COLEGIO.required'=>'Campo Obligatorio',
            'TITULOCOLEGIO.required'=>'Campo Obligatorio',
            //'TELEFONOA.digits'=>'Debe tener 10 digitos',
            //'TELEFONOB.digits'=>'Debe tener 10 digitos',
            //'TELEFONORA.digits'=>'Debe tener 10 digitos',
            //'TELEFONORB.digits'=>'Debe tener 10 digitos',
            
        ];

       
    }
}