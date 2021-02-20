<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Determina si el usuario esta autorizado para realizar esta solicitud
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     * Obtiene las reglas de validación que se aplican a la solicitud.
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
