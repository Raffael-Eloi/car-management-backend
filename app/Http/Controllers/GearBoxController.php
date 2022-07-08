<?php

namespace App\Http\Controllers;

use App\Http\Requests\GearBox\GearBoxStoreRequest;
use App\Http\Requests\GearBox\GearBoxUpdateRequest;
use App\Services\GearBoxService;

class GearBoxController extends Controller
{
    protected $gearBoxService;

    public function __construct(GearBoxService $gearBoxService) {
        $this->gearBoxService = $gearBoxService;
        // $this->middleware('auth:api');
    }

    public function index()
    {
        return response()->json($this->gearBoxService->getAllGearBoxes());
    }

    public function store(GearBoxStoreRequest $request)
    {
        return response()->json($this->gearBoxService->storeGearBox($request->validated()), 201);
    }

    public function show($id)
    {
        return response()->json($this->gearBoxService->getById($id));
    }

    public function update(GearBoxUpdateRequest $request, $id)
    {
        return response()->json($this->gearBoxService->updateGearBox($request->validated(), $id), 201);
    }

    public function destroy($id)
    {
        return response()->json($this->gearBoxService->deleteGearBox($id), 200);
    }
}