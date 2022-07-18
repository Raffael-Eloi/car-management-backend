<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vehicle\VehicleStoreRequest;
use App\Http\Requests\Vehicle\VehicleUpdateRequest;
use App\Services\VehicleService;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected $vehicleService;

    public function __construct(VehicleService $vehicleService) 
    {
        $this->vehicleService = $vehicleService;
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        return response()->json($this->vehicleService->getVehiclesWithPaginate($request->all()));
    }

    public function store(VehicleStoreRequest $request) 
    {
        return response()->json($this->vehicleService->storeVehicle($request->validated(), 201));
    }

    public function show($id)
    {
        return response()->json($this->vehicleService->getById($id), 200);
    }

    public function update(VehicleUpdateRequest $request, $id)
    {
        return response()->json($this->vehicleService->updateVehicle($request->validated(), $id), 201);
    }

    public function destroy($id)
    {
        return response()->json($this->vehicleService->deleteVehicle($id), 200);
    }
}
