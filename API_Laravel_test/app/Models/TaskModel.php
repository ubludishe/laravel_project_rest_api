<?php

namespace App\Models;

use App\Policies\TaskPolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class TaskModel extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'tasks';

    public function project(){
        return $this->belongsTo(ProjectModel::class);
    }

    public function assignedUser(){
        return $this->belongsTo(UserModel::class, 'assigned_to');
    }

    public function creator(){
        return $this->belongsTo(UserModel::class, 'created_by');
    }
}
