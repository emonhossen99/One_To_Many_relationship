<?php

use App\Models\RolesModel;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
  $roles = RolesModel::get();
  $users = UsersModel::get();
  return view('Home',['roles' => $roles,'users'=>$users]);
});
