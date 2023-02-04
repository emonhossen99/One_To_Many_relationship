<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    protected $table = 'myusers';  

    public function getRole(){
        return $this-> belongsTo(RolesModel::class,'roles_id','id');
    }
}
