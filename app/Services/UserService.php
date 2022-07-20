<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService {

  protected $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function getUsersWithPagination($data) 
  {
    return $this->userRepository->getPaginateFiltered($data, $data['perPage']);
  }

  public function storeUser($request)
  {
    return $this->userRepository->create($request);
  }

  public function getById($id)
  {
    return $this->userRepository->show($id);
  }

  public function updateUser($request, $id)
  {
    return $this->userRepository->update($request, $id);
  }

  public function destroyUser($id)
  {
    return $this->userRepository->destroy($id);
  }

  public function disableUser($id)
  {
    return $this->userRepository->disable($id);
  }
}
