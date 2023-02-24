<?php

namespace App\Http\Controllers;

use App\Models\LogM;
use App\Http\Resources\LogR;
use Illuminate\Http\Request;

class LogC extends Controller
{
    public function index(){
        $log = LogM::all();
       return LogR::collection($log);
    }

    public function detail($id){
        $log = LogM::findOrFail($id);
        return new LogR($log);
    }
}
