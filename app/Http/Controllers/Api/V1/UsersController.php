<?php

namespace App\Http\Controllers\Api\V1;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;
use Illuminate\Http\Request;



class UsersController extends Controller
{
    public function index()
    {
        return new UserResource(User::with(['role'])->get());
    }

    public function show($id)
    {
        $user = User::with(['role'])->findOrFail($id);

        return new UserResource($user);
    }

    public function store(StoreUsersRequest $request)
    {
        $user = User::create($request->all());
        

        return (new UserResource($user))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateUsersRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        

        return (new UserResource($user))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response(null, 204);
    }
}
