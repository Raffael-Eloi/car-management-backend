<?php
namespace App\Repositories;

use App\Models\Owner;

class OwnerRepository {
  
  public function getPaginateFiltered($filter, $perPage = 10)
  {
    $owners = new Owner();
    $owners = $this->filterQuery($owners, $filter);
    $owners = $owners->with('vehicles');
    $owners = $owners->paginate($perPage);
    return $owners;
  }

  public function create($data)
  {
    $owner = new Owner();
    $owner->fill($data);
    $owner->save();

    return $owner;
  }

  public function show($id)
  {
    $owner = Owner::findOrFail($id);
    return $owner;
  }

  public function update($data, $id)
  {
    $owner = Owner::findOrFail($id);
    $owner->fill($data);
    $owner->save();
    return $owner;
  }

  public function destroy($id)
  {
    $owner = Owner::findOrFail($id);
    $owner->delete();
  }

  protected function filterQuery($owners, $filter) 
  {
    return $owners->where(function ($query) use ($filter) {
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