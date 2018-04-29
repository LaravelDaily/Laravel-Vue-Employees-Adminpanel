<?php

namespace App\Http\Controllers\Api\V1;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Resources\Company as CompanyResource;
use App\Http\Requests\Admin\StoreCompaniesRequest;
use App\Http\Requests\Admin\UpdateCompaniesRequest;
use Illuminate\Http\Request;



class CompaniesController extends Controller
{
    public function index()
    {
        return new CompanyResource(Company::with([])->get());
    }

    public function show($id)
    {
        $company = Company::with([])->findOrFail($id);

        return new CompanyResource($company);
    }

    public function store(StoreCompaniesRequest $request)
    {
        $company = Company::create($request->all());
        

        return (new CompanyResource($company))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateCompaniesRequest $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());
        

        return (new CompanyResource($company))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return response(null, 204);
    }
}
