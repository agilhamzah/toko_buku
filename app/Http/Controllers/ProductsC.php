<?php

namespace App\Http\Controllers;

use App\Models\ProductsM;
use Illuminate\Http\Request;
use App\Http\Resources\ProductR;


class ProductsC extends Controller
{
    public function index(){
        $products = ProductsM::all();
        return ProductR::collection($products);
    }

    public function detail($id){
        $products = ProductsM::findOrFail($id);
        return new ProductR($products);
    }
}
