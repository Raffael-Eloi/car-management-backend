<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository {
  
  public function get()
  {
    return User::where('active', true)->get();
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
    $user = $user->first();
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
}