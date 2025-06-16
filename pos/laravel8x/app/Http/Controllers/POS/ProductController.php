<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(){

        $products = Product::get();
        return view('pos.product.index', ['products' => $products]);
    }

    public function add(){
        return view('pos.product.add');
    }

    public function create(Request $request){
        Product::add($request);
        return redirect()->back();
    }

    public function edit(){
        return view('pos.product.edit');
    }
}
