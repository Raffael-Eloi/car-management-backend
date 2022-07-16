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
        'owner_id',
        'customer_id',
        'relation_first_gear',
        'axle_differential',
        'weight',
        'potency',
        'front_balance',
        'back_balance',
        'between_axles_first',
        'between_axles_second',
        'between_axles_third',
    ];

    public function gearbox()
    {
        return $this->belongsTo(GearBox::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}