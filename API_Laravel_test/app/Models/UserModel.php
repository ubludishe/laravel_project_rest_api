<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'avatar',
        'phone'
    ];

    public function role(){
        return $this->belongsTo(RoleModel::class);
    }

    public function assignedTasks(){
        return $this->hasMany(TaskModel::class, 'assigned_to');
    }

    public function createdTasks(){
        return $this->hasMany(TaskModel::class, 'created_by');
    }

    public function createdProjects(){
        return $this->hasMany(ProjectModel::class, 'created_by');
    }
}
