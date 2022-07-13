<?php

namespace App\Http\Requests\Owner;

use Illuminate\Foundation\Http\FormRequest;

class OwnerStoreRequest extends FormRequest
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
            'name'         => 'required|string|min:4|max:255',
            'document'     => 'required|string',
            'rg'           => 'string',
            'phone'        => 'string',
            'address'      => 'required|string',
            'neighborhood' => 'required|string',
            'city'         => 'required|string',
            'state'        => 'required|string',
            'zip_code'     => 'required|string',
            'email'        => 'string',
            'login_br'     => 'string',
            'password_br'  => 'string',
            'login_ba'     => 'string',
            'password_ba'  => 'string',
            'login_go'     => 'string',
            'password_go'  => 'string',
            'login_mg'     => 'string',
            'password_mg'  => 'string',
            'login_sp'     => 'string',
            'password_sp'  => 'string',
            'login_pr'     => 'string',
            'password_pr'  => 'string',
            'login_pe'     => 'string',
            'password_pe'  => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'O campo nome é obrigatório', 
            'name.string'           => 'O campo nome deve ser do tipo texto', 
            'name.min'              => 'O campo nome deve ter no mínimo 4 caracteres', 
            'name.max'              => 'O campo nome deve ter no máximo 255 caracteres',
            'document.string'       => 'O campo documento deve ser do tipo texto',
            'document.required'     => 'O campo documento é obrigatório',
            'rg.string'             => 'O campo RG deve ser do tipo texto',
            'phone.string'          => 'O campo telefone deve ser do tipo texto',
            'address.string'        => 'O campo endereço deve ser do tipo texto',
            'address.required'      => 'O campo endereço é obrigatório',
            'neighborhood.string'   => 'O campo bairro deve ser do tipo texto',
            'neighborhood.required' => 'O campo bairro é obrigatório',
            'city.string'           => 'O campo cidade deve ser do tipo texto',
            'city.required'         => 'O campo cidade é obrigatório',
            'state.string'          => 'O campo estado deve ser do tipo texto',
            'state.required'        => 'O campo estado é obrigatório',
            'zip_code.string'       => 'O campo CEP deve ser do tipo texto',
            'zip_code.required'     => 'O campo CEP é obrigatório',
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
