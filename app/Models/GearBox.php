<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GearBox extends Model
{

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gearboxes';

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['vehicle'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cl',
        'cr',
        'gear_1',
        'gear_2',
        'gear_3',
        'gear_4',
        'gear_5',
        'gear_6',
        'gear_7',
        'gear_8',
        'gear_9',
        'gear_10',
        'gear_11',
        'gear_12',
        'gear_13',
        'gear_14',
        'gear_15',
        'gear_16'
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class, 'gearbox_id');
    }
}
