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
            'dni'=>'string|required|unique:clients|max:8',
            'ruc'=>'string|required|unique:clients|max:11',
            'address'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients|max:9',
            'email'=>'string|required|unique:clients|max:255|email:rfc,dns',
        ];
    }
}
