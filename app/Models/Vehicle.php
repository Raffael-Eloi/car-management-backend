<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'brand',
        'model',
        'license_plate',
        'year_model',
        'color',
        'axle_quantity',
        'torque',
        'gearbox_id',
        'relation_first_gear',
        'axle_differential'
    ];

    public function gearboxes()
    {
        return $this->belongsTo(GearBox::class);
    }
}