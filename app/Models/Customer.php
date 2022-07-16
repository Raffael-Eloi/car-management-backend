<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'active',
        'document',
        'phone',
        'address',
        'city',
        'state',
        'email',
        'social_contract',
        'contact',
    ];

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
}