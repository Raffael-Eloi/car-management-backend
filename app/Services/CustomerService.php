<?php

namespace App\Services;

use App\Repositories\CustomerRepository;

class CustomerService {

  protected $customerRepository;

  public function __construct(CustomerRepository $customerRepository)
  {
    $this->customerRepository = $customerRepository;
  }

  public function getCustomersWithPagination($data) 
  {
    return $this->customerRepository->getPaginateFiltered($data, $data['perPage']);
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
