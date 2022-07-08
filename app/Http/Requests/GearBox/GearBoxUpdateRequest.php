<?php

namespace App\Http\Requests\GearBox;

use Illuminate\Foundation\Http\FormRequest;

class GearBoxUpdateRequest extends FormRequest
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
            'name'    => 'string|min:4|max:255',
            'gear_1'  => 'numeric',
            'gear_2'  => 'numeric',
            'gear_3'  => 'numeric',
            'gear_4'  => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.string'     => 'O campo nome deve ser do tipo texto', 
            'name.min'        => 'O campo nome deve ter no mínimo 4 caracteres', 
            'name.max'        => 'O campo nome deve ter no máximo 255 caracteres',
            'gear_1.numeric'  => 'O campo marcha 1 deve ser do tipo número', 
            'gear_2.numeric'  => 'O campo marcha 2 deve ser do tipo número', 
            'gear_3.numeric'  => 'O campo marcha 3 deve ser do tipo número', 
            'gear_4.numeric'  => 'O campo marcha 4 deve ser do tipo número', 
        ];
    }
}
