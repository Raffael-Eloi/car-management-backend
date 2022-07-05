<?php
namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository {
  public function get()
  {
    $customers = new Customer();
    $customers = $customers->get();
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
    $customer = Customer::where('id', $id);
    $customer = $customer->first();
    return $customer;
  }

  public function update($data, $id)
  {
    $customer = Customer::where('id', $id)->first();
    $customer->fill($data);
    $customer->save();
    return $customer;
  }

  public function destroy($id)
  {
    $customer = Customer::where('id', $id)->first();
    $customer->delete();
  }
}