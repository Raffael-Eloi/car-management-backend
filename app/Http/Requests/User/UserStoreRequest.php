<?php

namespace App\Http\Requests\User;

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
            'name'     => 'required|string|min:4|max:255', 
            'document' => 'required', 
            'phone'    => 'required',
            'address'  => 'required',  
            'city'     => 'required|string', 
            'state'    => 'required|string', 
            'email'    => 'required|string', 
            'password' => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'O campo nome é obrigatório', 
            'name.string'       => 'O campo nome deve ser do tipo texto', 
            'name.min'          => 'O campo nome deve ter no máximo 4 caracteres', 
            'name.max'          => 'O campo nome deve ter no máximo 255 caracteres', 
            'document.required' => 'O campo documento é obrigatório', 
            'phone.required'    => 'O campo telefone é obrigatório',
            'address.required'  => 'O campo endereço é obrigatório',  
            'city.required'     => 'O campo cidade é obrigatório', 
            'city.string'       => 'O campo cidade deve ser do tipo texto', 
            'state.required'    => 'O campo estado é obrigatório', 
            'state.string'      => 'O campo estado deve ser do tipo texto', 
            'email.required'    => 'O campo email é obrigatório', 
            'email.string'      => 'O campo email deve ser do tipo texto', 
            'password.required' => 'O campo senha é obrigatório', 
        ];
    }
}
