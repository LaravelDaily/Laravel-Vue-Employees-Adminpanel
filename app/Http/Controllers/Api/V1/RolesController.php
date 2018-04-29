<?php

namespace App\Http\Controllers\Api\V1;

use App\Role;
use App\Http\Controllers\Controller;
use App\Http\Resources\Role as RoleResource;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;
use Illuminate\Http\Request;



class RolesController extends Controller
{
    public function index()
    {
        return new RoleResource(Role::with([])->get());
    }

    public function show($id)
    {
        $role = Role::with([])->findOrFail($id);

        return new RoleResource($role);
    }

    public function store(StoreRolesRequest $request)
    {
        $role = Role::create($request->all());
        

        return (new RoleResource($role))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateRolesRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());
        

        return (new RoleResource($role))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return response(null, 204);
    }
}
