<?php

namespace App\Services;

use App\Repositories\OwnerRepository;

class OwnerService {

  protected $ownerRepository;

  public function __construct(OwnerRepository $ownerRepository)
  {
    $this->ownerRepository = $ownerRepository;
  }

  public function getAllOwners() 
  {
    return $this->ownerRepository->get();
  }

  public function storeOwner($request)
  {
    return $this->ownerRepository->create($request);
  }

  public function getById($id)
  {
    return $this->ownerRepository->show($id);
  }

  public function updateOwner($request, $id)
  {
    return $this->ownerRepository->update($request, $id);
  }

  public function destroyOwner($id)
  {
    return $this->ownerRepository->destroy($id);
  }
}
