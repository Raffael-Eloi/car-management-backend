<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService) 
    {
        $this->userService = $userService;
        // $this->middleware('auth:api');
    }

    public function index()
    {
        return response()->json($this->userService->getAllUsers());
    }

    public function store(UserStoreRequest $request)
    {
        return response()->json($this->userService->storeUser($request->validated()),201);
    }

    public function show($id)
    {
        return response()->json($this->userService->getById($id));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        return response()->json($this->userService->updateUser($request->validated(), $id), 200);
    }

    public function destroy($id)
    {
        return response()->json($this->userService->disableUser($id), 200);
    }
}
