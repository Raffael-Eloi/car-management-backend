<?php

namespace App\Http\Controllers;

use App\Services\OwnerService;

class OwnerController extends Controller
{
    protected $ownerService;

    public function __construct(OwnerService $ownerService) {
        $this->ownerService = $ownerService;
    }

    public function index()
    {
        return response()->json($this->ownerService->getAllOwners());
    }

    public function store(UserStoreRequest $request)
    {
        return response()->json($this->ownerService->storeOwner($request->validated()),201);
    }

    public function show($id)
    {
        return response()->json($this->ownerService->getById($id));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        return response()->json($this->ownerService->updateOwner($request->validated(), $id), 200);
    }

    public function destroy($id)
    {
        return response()->json($this->ownerService->destroyOwner($id), 200);
    }
}
