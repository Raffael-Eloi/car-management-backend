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
            'brand'                => 'string|min:4|max:255',
            'model'                => 'string|min:3|max:255',
            'license_plate'        => 'string|min:4|max:255',
            'year_model'           => 'string|min:4|max:255',
            'color'                => 'string|min:4|max:255',
            'axle_quantity'        => 'numeric|nullable',
            'torque'               => 'numeric|nullable',
            'gearbox_id'           => 'numeric|nullable',
            'owner_id'             => 'numeric',
            'customer_id'          => 'numeric|nullable',
            'relation_first_gear'  => 'numeric|nullable',
            'axle_differential'    => 'numeric|nullable',
            'weight'               => 'numeric|nullable',
            'potency'              => 'numeric|nullable',
            'front_balance'        => 'numeric|nullable',
            'back_balance'         => 'numeric|nullable',
            'between_axles_first'  => 'numeric|nullable',
            'between_axles_second' => 'numeric|nullable',
            'between_axles_third'  => 'numeric|nullable',
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
            'axle_quantity.numeric'        => 'O campo quantidade de eixos deve ser do tipo número',
            'torque.numeric'               => 'O campo torque deve ser do tipo número',
            'gearbox_id.numeric'           => 'O campo caixa de marchas deve ser do tipo número',
            'customer_id.numeric'          => 'O campo cliente associado deve ser do tipo número',
            'relation_first_gear.numeric'  => 'O campo relação primeira marcha deve ser do tipo número',
            'axle_differential.numeric'    => 'O campo relação diferencial deve ser do tipo número',
            'weight.numeric'               => 'O campo tara deve ser do tipo número',
            'potency.numeric'              => 'O campo potência deve ser do tipo número',
            'front_balance.numeric'        => 'O campo balanço dianteiro deve ser do tipo número',
            'back_balance.numeric'         => 'O campo balanço traseiro deve ser do tipo número',
            'between_axles_first.numeric'  => 'O campo balanço entre eixo 1 deve ser do tipo número',
            'between_axles_second.numeric' => 'O campo balanço entre eixo 2 deve ser do tipo número',
            'between_axles_third.numeric'  => 'O campo balanço entre eixo 3 deve ser do tipo número',
            
        ];
    }
}
