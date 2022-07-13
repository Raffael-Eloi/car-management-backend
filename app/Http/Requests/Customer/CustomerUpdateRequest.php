<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
            'name'            => 'string|min:4|max:255', 
            'document'        => 'string', 
            'phone'           => 'string',
            'address'         => 'string',  
            'city'            => 'string', 
            'state'           => 'string', 
            'email'           => 'string',
            'social_contract' => 'string',
            'contact'         => 'string',
        ];
    }

    public function messages()
    {
        return [ 
            'name.string'            => 'O campo nome deve ser do tipo texto', 
            'name.min'               => 'O campo nome deve ter no mínimo 4 caracteres', 
            'name.max'               => 'O campo nome deve ter no máximo 255 caracteres',
            'document.string'        => 'O campo documento deve ser do tipo texto',
            'phone.string'           => 'O campo telefone deve ser do tipo texto',
            'address.string'         => 'O campo endereço deve ser do tipo texto',
            'city.string'            => 'O campo cidade deve ser do tipo texto',
            'state.string'           => 'O campo estado deve ser do tipo texto',
            'email.string'           => 'O campo email deve ser do tipo texto',
            'social_contract.string' => 'O campo contrato social deve ser do tipo texto',
            'contact.string'         => 'O campo contato deve ser do tipo texto',
        ];
    }
}
