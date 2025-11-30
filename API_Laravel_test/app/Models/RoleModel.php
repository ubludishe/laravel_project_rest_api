<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class RoleModel extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'roles';

    public function users(){
        return $this->hasMany(UserModel::class);
    }
}
