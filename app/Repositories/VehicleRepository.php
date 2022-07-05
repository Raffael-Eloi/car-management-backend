<?php
namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository {
  public function get()
  {
    $vehicles = new Vehicle();
    $vehicles = $vehicles->with('gearboxes');
    $vehicles = $vehicles->get();
    return $vehicles;
  }

  public function create($data)
  {
    $vehicle = new Vehicle();
    $vehicle->fill($data);
    $vehicle->save();
    return $vehicle;
  }

  public function show($id)
  {
    $vehicle = Vehicle::findOrFail($id);
    $vehicle = $vehicle->first();
    return $vehicle;
  }

  public function update($data, $id)
  {
    $vehicle = Vehicle::findOrFail($id);
    $vehicle->fill($data);
    $vehicle->save();
    return $vehicle;
  }

  public function destroy($id)
  {
    $vehicle = Vehicle::findOrFail($id);
    $vehicle->delete();
  }
}