<?php
namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository {
  public function getPaginateFiltered($perPage = 10)
  {
    $vehicles = new Vehicle();
    $vehicles = $vehicles->with('gearbox');
    $vehicles = $vehicles->with('owner');
    $vehicles = $vehicles->with('customer');
    $vehicles = $vehicles->paginate($perPage);
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