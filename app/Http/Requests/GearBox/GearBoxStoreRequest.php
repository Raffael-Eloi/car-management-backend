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
            'name' => 'required|string|min:4|max:255',
            '1'    => 'required',
            '2'    => 'required',
            '3'    => 'required',
            '4'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório', 
            'name.string'   => 'O campo nome deve ser do tipo texto', 
            'name.min'      => 'O campo nome deve ter no máximo 4 caracteres', 
            'name.max'      => 'O campo nome deve ter no máximo 255 caracteres', 
            '1.required'    => 'O campo 1ª marcha é obrigatório', 
            '2.required'    => 'O campo 2ª marcha é obrigatório',
            '3.required'    => 'O campo 3ª marcha é obrigatório',  
            '4.required'    => 'O campo 4ª marcha é obrigatório', 
        ];
    }
}
