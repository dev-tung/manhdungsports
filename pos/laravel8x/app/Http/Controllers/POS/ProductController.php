<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('pos.product.index');
    }

    public function add(){
        return view('pos.product.add');
    }

    public function create(Request $request){
        $product = new Product;
        $product->create($request);
    }

    public function edit(){
        return view('pos.product.edit');
    }
}
