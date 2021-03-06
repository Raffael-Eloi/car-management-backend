<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\CustomerStoreRequest;
use App\Http\Requests\Customer\CustomerUpdateRequest;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService) {
        $this->customerService = $customerService;
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        return response()->json($this->customerService->getCustomersWithPagination($request->all()));
    }

    public function store(CustomerStoreRequest $request)
    {
        return response()->json($this->customerService->storeCustomer($request->validated()), 201);
    }

    public function show($id)
    {
        return response()->json($this->customerService->getById($id));
    }

    public function update(CustomerUpdateRequest $request, $id)
    {
        return response()->json($this->customerService->updateCustomer($request->validated(), $id), 201);
    }

    public function destroy($id)
    {
        return response()->json($this->customerService->deleteCustomer($id), 200);
    }
}
