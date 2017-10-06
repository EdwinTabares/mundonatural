<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        		'nombre'		=>	'min:5 | max:50 | required',
        		'apellido'		=>	'min:5 | max:50 | required',
        		'email'			=>	'min:10 | max:80 | required | email | unique:users',
        		'password'		=>	'min:5 | max:15 | required'
        ];
    }
}
