<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'string|required|max:255',
            'dni'=>'string|required|unique:clients,dni,' . $this->route('client')->id . '|max:8|min:8',
            'ruc'=>'string|required|unique:clients,ruc,' . $this->route('client')->id . '|max:11|min:11',
            'address'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients,phone,' . $this->route('client')->id . '|max:9|min:9',
            'email'=>'string|required|unique:clients,email,' . $this->route('client')->id . '|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return [
            'name.string'=>'El valor no es correcto.',
            'name.required'=>'Este campo es requerido.',
            'name.max'=>'Solo se permite 255 caracteres.',
            
            'dni.string'=>'El valor no es correcto.',
            'dni.required'=>'Este campo es requerido.',
            'dni.unique'=>'Este DNI ya se encuentra registrado.',
            'dni.max'=>'Solo se permite 8 caracteres.',
            'dni.min'=>'Se requiere de 8 caracteres.',
            
            'ruc.string'=>'El valor no es correcto.',
            'ruc.unique'=>'El número de RUC ya se encuentra registrado.',
            'ruc.max'=>'Solo se permite 11 caracteres.',
            'ruc.min'=>'Se requiere de 11 caracteres.',

            'address.string'=>'El valor no es correcto.',
            'address.required'=>'Este campo es requerido.',
            'address.max'=>'Solo se permite 255 caracteres.',

            'phone.string'=>'El valor no es correcto.',
            'phone.required'=>'Este campo es requerido.',
            'phone.unique'=>'El número de celular ya se encuentra registrado.',
            'phone.max'=>'Solo se permite 9 caracteres.',
            'phone.min'=>'Se requiere de 9 caracteres.',

            'email.string'=>'El valor no es correcto.',
            'email.unique'=>'La dirección de correo electrónico ya se encuentra registrado.',
            'email.max'=>'Solo se permite 255 caracteres.',
            'email.email'=>'No es un correo electrónico.',
        ];
    }
}
