<?php

namespace App\Services;

use App\Repositories\GearBoxRepository;

class GearBoxService {
  protected $gearBoxRepository;

  public function __construct(GearBoxRepository $gearBoxRepository)
  {
    $this->gearBoxRepository = $gearBoxRepository;
  }

  public function getAllGearBoxes()
  {
    return $this->gearBoxRepository->get();
  }

  public function storeGearBox($request)
  {
    return $this->gearBoxRepository->create($request);
  }

  public function getById($id)
  {
    return $this->gearBoxRepository->show($id);
  }

  public function updateGearBox($request, $id)
  {
    return $this->gearBoxRepository->update($request, $id);
  }

  public function deleteGearBox($id)
  {
    return $this->gearBoxRepository->destroy($id);
  }
}