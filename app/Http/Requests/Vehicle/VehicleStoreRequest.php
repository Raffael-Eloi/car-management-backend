<?php

namespace App\Http\Requests\Vehicle;

use Illuminate\Foundation\Http\FormRequest;

class VehicleStoreRequest extends FormRequest
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
            'brand'               => 'required|string|min:4|max:255',
            'model'               => 'required|string|min:4|max:255',
            'license_plate'       => 'required|string|min:4|max:255',
            'year_model'          => 'required|string|min:4|max:255',
            'color'               => 'required|string|min:4|max:255',
            'axle_quantity'       => 'required|numeric',
            'torque'              => 'required|numeric',
            'gearbox_id'          => 'required|numeric',
            'relation_first_gear' => 'required|numeric',
            'axle_differential'   => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'brand.required'               => 'O campo marca é obrigatório',
            'brand.string'                 => 'O campo marca deve ser do tipo texto',
            'brand.min'                    => 'O campo marca deve ter no mínimo 4 caracteres',
            'brand.max'                    => 'O campo marca deve ter no máximo 255 caracteres',
            'model.required'               => 'O campo modelo é obrigatório',
            'model.string'                 => 'O campo modelo deve ser do tipo texto',
            'model.min'                    => 'O campo modelo deve ter no mínimo 4 caracteres',
            'model.max'                    => 'O campo modelo deve ter no máximo 255 caracteres',
            'license_plate.required'       => 'O campo placa é obrigatório',
            'license_plate.string'         => 'O campo placa deve ser do tipo texto',
            'license_plate.min'            => 'O campo placa deve ter no mínimo 4 caracteres',
            'license_plate.max'            => 'O campo placa deve ter no máximo 255 caracteres',
            'year_model.required'          => 'O campo ano/modelo é obrigatório',
            'year_model.string'            => 'O campo ano/modelo deve ser do tipo texto',
            'year_model.min'               => 'O campo ano/modelo deve ter no mínimo 4 caracteres',
            'year_model.max'               => 'O campo ano/modelo deve ter no máximo 255 caracteres',
            'color.required'               => 'O campo cor é obrigatório',
            'color.string'                 => 'O campo cor deve ser do tipo texto',
            'color.min'                    => 'O campo cor deve ter no mínimo 4 caracteres',
            'color.max'                    => 'O campo cor deve ter no máximo 255 caracteres',
            'axle_quantity.required'       => 'O campo quantidade de eixos é obrigatório',
            'axle_quantity.numeric'        => 'O campo quantidade de eixos deve ser do tipo número',
            'torque.required'              => 'O campo torque é obrigatório',
            'torque.numeric'               => 'O campo torque deve ser do tipo número',
            'gearbox_id.required'          => 'O campo caixa de marchas é obrigatório',
            'gearbox_id.numeric'           => 'O campo caixa de marchas deve ser do tipo número',
            'relation_first_gear.required' => 'O campo relação primeira marcha é obrigatório',
            'relation_first_gear.numeric'  => 'O campo relação primeira marcha deve ser do tipo número',
            'axle_differential.required'   => 'O campo relação diferencial é obrigatório',
            'axle_differential.numeric'    => 'O campo relação diferencial deve ser do tipo número',
        ];
    }
}