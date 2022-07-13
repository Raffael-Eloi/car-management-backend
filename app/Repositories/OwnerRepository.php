<?php
namespace App\Repositories;

use App\Models\Owner;

class OwnerRepository {
  
  public function get()
  {
    $owners = new Owner();
    $owners = $owners->get();
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
    $owner = $owner->first();
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
}