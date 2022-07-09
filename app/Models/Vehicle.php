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
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['gearbox'];

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

    public function gearbox()
    {
        return $this->belongsTo(GearBox::class);
    }
}