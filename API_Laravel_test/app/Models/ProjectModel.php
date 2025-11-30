<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserModel;
use App\Models\TaskModel;
use Laravel\Sanctum\HasApiTokens;

class ProjectModel extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description',
    ];

    public function tasks(){
        return $this->hasMany(TaskModel::class);
    }

    public function creator(){
        return $this->belongsTo(UserModel::class, 'created_by');
    }
}
