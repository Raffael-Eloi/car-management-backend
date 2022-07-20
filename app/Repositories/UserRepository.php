<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository {
  
  public function getPaginateFiltered($filter, $perPage = 10)
  {
    $users = User::where('active', true);
    $users = $this->filterQuery($users, $filter);
    $users = $users->paginate($perPage);
    return $users;
  }

  public function create($data)
  {
    $user = new User();
    $user->fill($data);
    $user->password = bcrypt($data['password']);
    $user->save();

    return $user;
  }

  public function show($id)
  {
    $user = User::findOrFail($id);
    return $user;
  }

  public function update($data, $id)
  {
    $user = User::findOrFail($id);
    $user->fill($data);
    $user->save();
    return $user;
  }

  public function destroy($id)
  {
    $user = User::findOrFail($id);
    $user->delete();
  }

  public function disable($id)
  {
    $user = User::findOrFail($id);
    $user->active = false;
    $user->save();
  }

  protected function filterQuery($users, $filter) 
  {
    return $users->where(function ($query) use ($filter) {
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