<?php

namespace App\Http\Controllers;

use App\Models\UsersM;
use App\Http\Resources\UsersR;
use Illuminate\Http\Request;


class UsersC extends Controller
{
    public function index(){
        $users = UsersM::all();
        return UsersR::collection($users);
    }

    public function detail($id){
        $users = UsersM::findOrFail($id);
        return new UsersR($users);
    }
}
