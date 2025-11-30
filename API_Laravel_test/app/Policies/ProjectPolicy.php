<?php

namespace App\Policies;

use App\Models\ProjectModel;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
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

    public function createProject(ProjectModel $project, UserModel $user){
        return $user->role == 1 or $user->role == 2;
    }

    public function updateProject(ProjectModel $project, UserModel $user){
        return $user->role == 1 or $user->role == 2;
    }

    public function deleteeProject(ProjectModel $project, UserModel $user){
        return $user->role == 1 or $user->role == 2;
    }

}
