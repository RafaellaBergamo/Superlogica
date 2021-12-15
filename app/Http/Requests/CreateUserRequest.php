<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'bail|required|regex:/^[a-zA-Z]+\s+[a-zA-Z]{0,}$/',
            'username' => 'bail|required|min:5',
            'zipCode' => 'bail|required|integer|size:8',
            'email' => 'bail|required|unique:App\Models\UserModel|email:rfc,dns', 
            'password' => 'bail|required|regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/'
        ];
    }
}
