<?php

namespace App\Http\Controllers;

use App\Models\TransactionM;
use App\Http\Resources\TransactionR;
use Illuminate\Http\Request;


class TransactionC extends Controller
{
    public function index(){
        $transactions = TransactionM::all();
       // return response()->json ($posts); 
       return TransactionR::collection($transactions);
    }

    public function detail($id){
        $transactions = TransactionM::findOrFail($id);
        return new TransactionR($transactions);
    }
}
