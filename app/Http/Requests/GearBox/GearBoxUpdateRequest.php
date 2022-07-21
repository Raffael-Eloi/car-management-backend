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
            'cl'      => 'numeric|nullable',
            'cr'      => 'numeric|nullable',
            'gear_1'  => 'numeric',
            'gear_2'  => 'numeric',
            'gear_3'  => 'numeric',
            'gear_4'  => 'numeric',
            'gear_5'  => 'numeric|nullable',
            'gear_6'  => 'numeric|nullable',
            'gear_7'  => 'numeric|nullable',
            'gear_8'  => 'numeric|nullable',
            'gear_9'  => 'numeric|nullable',
            'gear_10' => 'numeric|nullable',
            'gear_11' => 'numeric|nullable',
            'gear_12' => 'numeric|nullable',
            'gear_13' => 'numeric|nullable',
            'gear_14' => 'numeric|nullable',
            'gear_15' => 'numeric|nullable',
            'gear_16' => 'numeric|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.string'     => 'O campo nome deve ser do tipo texto', 
            'name.min'        => 'O campo nome deve ter no mínimo 4 caracteres', 
            'name.max'        => 'O campo nome deve ter no máximo 255 caracteres', 
            'cl.numeric'      => 'O campo CL deve ser do tipo número', 
            'cr.numeric'      => 'O campo CR deve ser do tipo número',
            'gear_1.numeric'  => 'O campo marcha 1 deve ser do tipo número', 
            'gear_2.numeric'  => 'O campo marcha 2 deve ser do tipo número', 
            'gear_3.numeric'  => 'O campo marcha 3 deve ser do tipo número', 
            'gear_4.numeric'  => 'O campo marcha 4 deve ser do tipo número', 
            'gear_5.numeric'  => 'O campo marcha 5 deve ser do tipo número', 
            'gear_6.numeric'  => 'O campo marcha 6 deve ser do tipo número', 
            'gear_7.numeric'  => 'O campo marcha 7 deve ser do tipo número', 
            'gear_8.numeric'  => 'O campo marcha 8 deve ser do tipo número', 
            'gear_9.numeric'  => 'O campo marcha 9 deve ser do tipo número', 
            'gear_10.numeric' => 'O campo marcha 10 deve ser do tipo número', 
            'gear_11.numeric' => 'O campo marcha 11 deve ser do tipo número', 
            'gear_12.numeric' => 'O campo marcha 12 deve ser do tipo número', 
            'gear_13.numeric' => 'O campo marcha 13 deve ser do tipo número', 
            'gear_14.numeric' => 'O campo marcha 14 deve ser do tipo número', 
            'gear_15.numeric' => 'O campo marcha 15 deve ser do tipo número', 
            'gear_15.numeric' => 'O campo marcha 15 deve ser do tipo número', 
        ];
    }
}
