<?php

namespace App\Models;

use App\Models\UsersModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RolesModel extends Model
{
    use HasFactory;
    protected $table = 'roles';

    public function getUsers(){
        return $this->hasMany(UsersModel::class,'roles_id','id');
    }
}
