<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LogC;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\UsersC;
use App\Http\Controllers\ProductsC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionC;


route::get('/products',[ProductsC::class,'index'])->middleware(['auth:sanctum']);
route::get('/products/{id}',[ProductsC::class,'detail'])->middleware(['auth:sanctum']);

route::get('/transaction',[TransactionC::class,'index'])->middleware(['auth:sanctum']);
route::get('/transaction/{id}',[TransactionC::class,'detail'])->middleware(['auth:sanctum']);

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('kasih');
});

route::get('/kasir',function(){
    return Hash::make('agil');
});

route::get('/owner',function(){
    return Hash::make('susilawati');
});

route::get('/log',[LogC::class,'index']);
route::get('/log/{id}',[LogC::class,'detail']);

route::get('/users',[UsersC::class,'index']);
route::get('/users/{id}',[UsersC::class,'detail']);
