<?php

namespace App\Http\Requests\Vehicle;

use Illuminate\Foundation\Http\FormRequest;

class VehicleUpdateRequest extends FormRequest
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
            'brand'               => 'string|min:4|max:255',
            'model'               => 'string|min:4|max:255',
            'license_plate'       => 'string|min:4|max:255',
            'year_model'          => 'string|min:4|max:255',
            'color'               => 'string|min:4|max:255',
            'axle_quantity'       => 'string',
            'torque'              => 'string',
            'gearbox_id'          => 'string',
            'relation_first_gear' => 'string',
            'axle_differential'   => 'string',
        ];
    }

    public function messages()
    {
        return [
            'brand.string'                 => 'O campo marca deve ser do tipo texto',
            'brand.min'                    => 'O campo marca deve ter no mínimo 4 caracteres',
            'brand.max'                    => 'O campo marca deve ter no máximo 255 caracteres',
            'model.string'                 => 'O campo modelo deve ser do tipo texto',
            'model.min'                    => 'O campo modelo deve ter no mínimo 4 caracteres',
            'model.max'                    => 'O campo modelo deve ter no máximo 255 caracteres',
            'license_plate.string'         => 'O campo placa deve ser do tipo texto',
            'license_plate.min'            => 'O campo placa deve ter no mínimo 4 caracteres',
            'license_plate.max'            => 'O campo placa deve ter no máximo 255 caracteres',
            'year_model.string'            => 'O campo ano/modelo deve ser do tipo texto',
            'year_model.min'               => 'O campo ano/modelo deve ter no mínimo 4 caracteres',
            'year_model.max'               => 'O campo ano/modelo deve ter no máximo 255 caracteres',
            'color.string'                 => 'O campo cor deve ser do tipo texto',
            'color.min'                    => 'O campo cor deve ter no mínimo 4 caracteres',
            'color.max'                    => 'O campo cor deve ter no máximo 255 caracteres',
        ];
    }
}
