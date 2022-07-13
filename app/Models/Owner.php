<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'owner';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'document',
        'rg',
        'phone',
        'address',
        'neighborhood',
        'city',
        'state',
        'zip_code',
        'email',
        'login_br',
        'password_br',
        'login_ba',
        'password_ba',
        'login_go',
        'password_go',
        'login_mg',
        'password_mg',
        'login_sp',
        'password_sp',
        'login_pr',
        'password_pr',
        'login_pe',
        'password_pe',
    ];
}