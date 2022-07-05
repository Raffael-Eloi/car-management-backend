<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authentication
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

// User
Route::controller(UserController::class)->group(function(){
    Route::get('users','index');
    Route::post('users','store');
    Route::get('users/{id}','show');
    Route::put('users/{id}','update');
    Route::delete('users/{id}','destroy');
});

// Customer
Route::controller(CustomerController::class)->group(function(){
    Route::get('customers','index');
    Route::post('customers','store');
    Route::get('customers/{id}','show');
    Route::put('customers/{id}','update');
    Route::delete('customers/{id}','destroy');
});

// GearBox
Route::controller(VehicleController::class)->group(function(){
    Route::get('gearboxes','index');
    Route::post('gearboxes','store');
    Route::get('gearboxes/{id}','show');
    Route::put('gearboxes/{id}','update');
    Route::delete('gearboxes/{id}','destroy');
});

// Vehicle
Route::controller(VehicleController::class)->group(function(){
    Route::get('vehicles','index');
    Route::post('vehicles','store');
    Route::get('vehicles/{id}','show');
    Route::put('vehicles/{id}','update');
    Route::delete('vehicles/{id}','destroy');
});