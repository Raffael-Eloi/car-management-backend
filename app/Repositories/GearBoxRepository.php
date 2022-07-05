<?php
namespace App\Repositories;

use App\Models\GearBox;

class GearBoxRepository {
  public function get()
  {
    $gearBoxes = new GearBox();
    $gearBoxes = $gearBoxes->get();
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
    $gearBox = $gearBox->first();
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
}