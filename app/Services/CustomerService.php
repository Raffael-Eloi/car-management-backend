<?php

namespace App\Services;

use App\Repositories\UserRepository;

class CustomerService {

  protected $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function getAllCustomers() 
  {
    return $this->userRepository->get();
  }

  public function storeCustomer($request)
  {
    return $this->userRepository->create($request);
  }

  public function getById($id)
  {
    return $this->userRepository->show($id);
  }

  public function updateCustomer($request, $id)
  {
    return $this->userRepository->update($request, $id);
  }

  public function destroyCustomer($id)
  {
    return $this->userRepository->destroy($id);
  }
}
