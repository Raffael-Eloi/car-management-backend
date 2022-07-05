<?php

namespace App\Http\Requests\GearBox;

use Illuminate\Foundation\Http\FormRequest;

class GearBoxStoreRequest extends FormRequest
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
            'name'       => 'required|string|min:4|max:255',
            'gear_1'     => 'required',
            'gear_2'     => 'required',
            'gear_3'     => 'required',
            'gear_4'     => 'required',
            'gear_5'     => 'string',
            'gear_6'     => 'string',
            'gear_7'     => 'string',
            'gear_8'     => 'string',
            'gear_9'     => 'string',
            'gear_10'    => 'string',
            'gear_11'    => 'string',
            'gear_12'    => 'string',
            'gear_13'    => 'string',
            'gear_14'    => 'string',
            'gear_15'    => 'string',
            'gear_16'    => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'      => 'O campo nome é obrigatório', 
            'name.string'        => 'O campo nome deve ser do tipo texto', 
            'name.min'           => 'O campo nome deve ter no máximo 4 caracteres', 
            'name.max'           => 'O campo nome deve ter no máximo 255 caracteres', 
            'gear_1.required'    => 'O campo marcha 1 é obrigatório', 
            'gear_2.required'    => 'O campo marcha 2 é obrigatório',
            'gear_3.required'    => 'O campo marcha 3 é obrigatório',  
            'gear_4.required'    => 'O campo marcha 4 é obrigatório', 
        ];
    }
}