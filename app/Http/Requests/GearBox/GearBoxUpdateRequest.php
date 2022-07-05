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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'string|min:4|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.string'   => 'O campo nome deve ser do tipo texto', 
            'name.min'      => 'O campo nome deve ter no máximo 4 caracteres', 
            'name.max'      => 'O campo nome deve ter no máximo 255 caracteres',
        ];
    }
}
