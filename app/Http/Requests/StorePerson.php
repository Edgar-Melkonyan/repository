<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerson extends FormRequest
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
            'name'       => 'required',
            'email'      => 'required|email',
            'level'      => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Eh, you forgot your name !',
            'email.required' => 'Email is mandatory',
            'level.required' => 'Level is mandatory',
        ];
    }
}
