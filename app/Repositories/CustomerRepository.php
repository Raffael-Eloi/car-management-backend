<?php
namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository {
  public function getPaginateFiltered($filter, $perPage = 10)
  {
    $customers = new Customer();
    $customers = $this->filterQuery($customers, $filter);
    $customers = $customers->with('vehicles');
    $customers = $customers->paginate($perPage);
    return $customers;
  }

  public function create($data)
  {
    $customer = new Customer();
    $customer->fill($data);
    $customer->save();
    return $customer;
  }

  public function show($id)
  {
    $customer = Customer::findOrFail($id);
    return $customer;
  }

  public function update($data, $id)
  {
    $customer = Customer::findOrFail($id);
    $customer->fill($data);
    $customer->save();
    return $customer;
  }

  public function destroy($id)
  {
    $customer = Customer::findOrFail($id);
    $customer->delete();
  }

  protected function filterQuery($customers, $filter) 
  {
    return $customers->where(function ($query) use ($filter) {
      if ($filter['filterByAttribute'] == "true") {
        if ($filter['attributeSearch'] == 'name') {
          $query->where('name', 'like', '%'.$filter['keywords'].'%');
        }
        if ($filter['attributeSearch'] == 'document') {
          $query->where('document', 'like', '%'.$filter['keywords'].'%');
        }
        if ($filter['attributeSearch'] == 'phone') {
          $query->where('phone', 'like', '%'.$filter['keywords'].'%');
        }
        if ($filter['attributeSearch'] == 'email') {
          $query->where('email', 'like', '%'.$filter['keywords'].'%');
        }
      }
    });
  }
}