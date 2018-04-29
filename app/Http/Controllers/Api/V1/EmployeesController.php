<?php

namespace App\Http\Controllers\Api\V1;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Resources\Employee as EmployeeResource;
use App\Http\Requests\Admin\StoreEmployeesRequest;
use App\Http\Requests\Admin\UpdateEmployeesRequest;
use Illuminate\Http\Request;



class EmployeesController extends Controller
{
    public function index()
    {
        return new EmployeeResource(Employee::with(['company'])->get());
    }

    public function show($id)
    {
        $employee = Employee::with(['company'])->findOrFail($id);

        return new EmployeeResource($employee);
    }

    public function store(StoreEmployeesRequest $request)
    {
        $employee = Employee::create($request->all());
        

        return (new EmployeeResource($employee))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateEmployeesRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        

        return (new EmployeeResource($employee))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response(null, 204);
    }
}
