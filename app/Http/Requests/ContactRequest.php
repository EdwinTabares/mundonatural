<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'telefono'      =>  'digits_between:5,15 | nullable',
        		'email'			=>	'min:10 | max:80 | required | email | unique:contactos'
        ];
    }
}
