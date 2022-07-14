<?php

namespace App\Http\Requests\Owner;

use Illuminate\Foundation\Http\FormRequest;

class OwnerUpdateRequest extends FormRequest
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
            'name'         => 'string|min:4|max:255',
            'document'     => 'string',
            'phone'        => 'string',
            'address'      => 'string',
            'neighborhood' => 'string',
            'city'         => 'string',
            'state'        => 'string',
            'zip_code'     => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name.string'         => 'O campo nome deve ser do tipo texto', 
            'name.min'            => 'O campo nome deve ter no mínimo 4 caracteres', 
            'name.max'            => 'O campo nome deve ter no máximo 255 caracteres',
            'document.string'     => 'O campo CPF/CNPJ deve ser do tipo texto',
            'phone.string'        => 'O campo telefone deve ser do tipo texto',
            'address.string'      => 'O campo endereço deve ser do tipo texto',
            'neighborhood.string' => 'O campo bairro deve ser do tipo texto',
            'city.string'         => 'O campo cidade deve ser do tipo texto',
            'state.string'        => 'O campo estado deve ser do tipo texto',
            'zip_code.string'     => 'O campo CEP deve ser do tipo texto',
        ];
    }
}
