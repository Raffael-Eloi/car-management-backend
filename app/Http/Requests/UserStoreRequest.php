<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'     => 'required', 
            'document' => 'required', 
            'phone'    => 'required',
            'address'  => 'required',  
            'city'     => 'required', 
            'state'    => 'required', 
            'email'    => 'required', 
            'password' => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'O campo nome é obrigatório', 
            'document.required' => 'O campo documento é obrigatório', 
            'phone.required'    => 'O campo telefone é obrigatório',
            'address.required'  => 'O campo endereço é obrigatório',  
            'city.required'     => 'O campo cidade é obrigatório', 
            'state.required'    => 'O campo estado é obrigatório', 
            'email.required'    => 'O campo email é obrigatório', 
            'password.required' => 'O campo senha é obrigatório', 
        ];
    }
}
