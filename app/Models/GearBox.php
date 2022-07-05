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
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'CL',
        'CR',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16'
    ];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }
}