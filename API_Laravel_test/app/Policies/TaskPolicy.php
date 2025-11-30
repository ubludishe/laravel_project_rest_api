<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function createTask(UserModel $user) {
        return $user->role == 1 or $user->role == 2;
    }
}
