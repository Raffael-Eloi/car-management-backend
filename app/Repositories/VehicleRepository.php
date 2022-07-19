<?php
namespace App\Repositories;

use App\Models\Vehicle;
use Illuminate\Contracts\Database\Eloquent\Builder;

class VehicleRepository {
  public function getPaginateFiltered($filter, $perPage = 10)
  {
    $vehicles = new Vehicle();
    $vehicles = $this->filterQuery($vehicles, $filter);
    $vehicles = $vehicles->with('gearbox');
    $vehicles = $vehicles->with('owner');
    $vehicles = $vehicles->with('customer');
    // dd($vehicles->get()); 
    // dd($vehicles); 
    
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

  protected function filterQuery($vehicles, $filter) 
  {
    return $vehicles->where(function ($query) use ($filter) {
      // $query->where('brand', 'like', '%'.$filter['keywords'].'%');
      // if ($filter['filterByAttribute'] == "true") {
      //   if ($filter['attributeSearch'] == 'brand') {
      //     $query->where('brand', 'like', '%'.$filter['keywords'].'%');
      //   }
      // }
    });
  }
}