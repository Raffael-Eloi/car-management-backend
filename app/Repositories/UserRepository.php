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
    $user->save();

    return $user;
  }
}