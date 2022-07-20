<?php
namespace App\Repositories;

use App\Models\GearBox;

class GearBoxRepository {
  public function getPaginateFiltered($filter, $perPage = 10)
  {
    $gearBoxes = new GearBox();
    $gearBoxes = $this->filterQuery($gearBoxes, $filter);
    $gearBoxes = $gearBoxes->with('vehicles');
    $gearBoxes = $gearBoxes->paginate($perPage);
    return $gearBoxes;
  }

  public function create($data)
  {
    $gearBox = new GearBox();
    $gearBox->fill($data);
    $gearBox->save();
    return $gearBox;
  }

  public function show($id)
  {
    $gearBox = GearBox::findOrFail($id);
    return $gearBox;
  }

  public function update($data, $id)
  {
    $gearBox = GearBox::findOrFail($id);
    $gearBox->fill($data);
    $gearBox->save();
    return $gearBox;
  }

  public function destroy($id)
  {
    $gearBox = GearBox::findOrFail($id);
    $gearBox->delete();
  }

  protected function filterQuery($gearBoxes, $filter) 
  {
    return $gearBoxes->where(function ($query) use ($filter) {
      if ($filter['filterByAttribute'] == "true") {
        if ($filter['attributeSearch'] == 'name') {
          $query->where('name', 'like', '%'.$filter['keywords'].'%');
        }
      }
    });
  }
}