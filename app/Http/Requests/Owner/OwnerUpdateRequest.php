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
            'rg'           => 'string|nullable',
            'phone'        => 'string|nullable',
            'address'      => 'string',
            'neighborhood' => 'string',
            'city'         => 'string',
            'state'        => 'string',
            'zip_code'     => 'string',
            'email'        => 'string|nullable',
            'login_br'     => 'string|nullable',
            'password_br'  => 'string|nullable',
            'login_ba'     => 'string|nullable',
            'password_ba'  => 'string|nullable',
            'login_go'     => 'string|nullable',
            'password_go'  => 'string|nullable',
            'login_mg'     => 'string|nullable',
            'password_mg'  => 'string|nullable',
            'login_sp'     => 'string|nullable',
            'password_sp'  => 'string|nullable',
            'login_pr'     => 'string|nullable',
            'password_pr'  => 'string|nullable',
            'login_pe'     => 'string|nullable',
            'password_pe'  => 'string|nullable',
        ];
    }

    public function messages()
    {
        return [ 
            'name.string'           => 'O campo nome deve ser do tipo texto', 
            'name.min'              => 'O campo nome deve ter no mínimo 4 caracteres', 
            'name.max'              => 'O campo nome deve ter no máximo 255 caracteres',
            'document.string'       => 'O campo documento deve ser do tipo texto',
            'rg.string'             => 'O campo RG deve ser do tipo texto',
            'phone.string'          => 'O campo telefone deve ser do tipo texto',
            'address.string'        => 'O campo endereço deve ser do tipo texto',
            'neighborhood.string'   => 'O campo bairro deve ser do tipo texto',
            'city.string'           => 'O campo cidade deve ser do tipo texto',
            'state.string'          => 'O campo estado deve ser do tipo texto',
            'zip_code.string'       => 'O campo CEP deve ser do tipo texto',
            'email.string'          => 'O campo e-mail deve ser do tipo texto',
            'login_br.string'       => 'O campo login BR deve ser do tipo texto',
            'password_br.string'    => 'O campo Senha BR deve ser do tipo texto',
            'login_ba.string'       => 'O campo login BA deve ser do tipo texto',
            'password_ba.string'    => 'O campo Senha BA deve ser do tipo texto',
            'login_go.string'       => 'O campo login GO deve ser do tipo texto',
            'password_go.string'    => 'O campo Senha GO deve ser do tipo texto',
            'login_mg.string'       => 'O campo login MG deve ser do tipo texto',
            'password_mg.string'    => 'O campo Senha MG deve ser do tipo texto',
            'login_sp.string'       => 'O campo login SP deve ser do tipo texto',
            'password_sp.string'    => 'O campo Senha SP deve ser do tipo texto',
            'login_pr.string'       => 'O campo login PR deve ser do tipo texto',
            'password_pr.string'    => 'O campo Senha PR deve ser do tipo texto',
            'login_pe.string'       => 'O campo login PE deve ser do tipo texto',
            'password_pe.string'    => 'O campo Senha PE deve ser do tipo texto',
        ];
    }
}
