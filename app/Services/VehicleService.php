<?php

namespace App\Services;

use App\Repositories\VehicleRepository;

class VehicleService {

  protected $vehicleRepository;

  public function __construct(VehicleRepository $vehicleRepository)
  {
    $this->vehicleRepository = $vehicleRepository;
  }

  public function getVehiclesWithPaginate($data)
  {
    return $this->vehicleRepository->getPaginateFiltered($data, $data['perPage']);
  }

  public function storeVehicle($request)
  {
    return $this->vehicleRepository->create($request);
  }

  public function getById($id)
  {
    return $this->vehicleRepository->show($id);
  }

  public function updateVehicle($request, $id)
  {
    return $this->vehicleRepository->update($request, $id);
  }

  public function deleteVehicle($id)
  {
    return $this->vehicleRepository->destroy($id);
  }
}