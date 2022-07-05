<?php

namespace App\Services;

use App\Repositories\CustomerRepository;

class CustomerService {

  protected $customerRepository;

  public function __construct(CustomerRepository $customerRepository)
  {
    $this->customerRepository = $customerRepository;
  }

  public function getAllCustomers() 
  {
    return $this->customerRepository->get();
  }

  public function storeCustomer($request)
  {
    return $this->customerRepository->create($request);
  }

  public function getById($id)
  {
    return $this->customerRepository->show($id);
  }

  public function updateCustomer($request, $id)
  {
    return $this->customerRepository->update($request, $id);
  }

  public function deleteCustomer($id)
  {
    return $this->customerRepository->destroy($id);
  }
}
