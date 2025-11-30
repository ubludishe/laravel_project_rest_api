<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function getUsers(UserModel $user){
        if ($user->role == 1) {
            return true;
        }
        return false;
    }
}
