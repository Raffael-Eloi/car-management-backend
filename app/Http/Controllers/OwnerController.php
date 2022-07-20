<?php

namespace App\Http\Controllers;

use App\Http\Requests\Owner\OwnerStoreRequest;
use App\Http\Requests\Owner\OwnerUpdateRequest;
use App\Services\OwnerService;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    protected $ownerService;

    public function __construct(OwnerService $ownerService) {
        $this->ownerService = $ownerService;
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        return response()->json($this->ownerService->getOwnersWithPagination($request->all()));
    }

    public function store(OwnerStoreRequest $request)
    {
        return response()->json($this->ownerService->storeOwner($request->validated()),201);
    }

    public function show($id)
    {
        return response()->json($this->ownerService->getById($id));
    }

    public function update(OwnerUpdateRequest $request, $id)
    {
        return response()->json($this->ownerService->updateOwner($request->validated(), $id), 200);
    }

    public function destroy($id)
    {
        return response()->json($this->ownerService->destroyOwner($id), 200);
    }
}
