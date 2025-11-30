<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{

    public function index(UserModel $user){
        Gate::authorize('getUsers', UserModel::class);
        return UserResource::collection(UserModel::all());
    }

    public function show($id){
        return UserResource::collection(UserModel::find($id));
    }

    public function update(UserUpdateRequest $request, UserModel $user){
            $user->update($request->all());
            return UserResource::collection($user);
    }
}
