<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(Request $request){
        $products = Product::where([
            ['product_name', 'like', '%' . $request->product_name . '%'], 
            ['product_category', 'like', '%' . $request->product_category . '%']
        ])->get();
        
        return view('POS.product.index', ['products' => $products]);
    }

    public function add(){
        return view('POS.product.add');
    }

    public function create(Request $request){
        Product::add($request);
        return redirect()->back();
    }

    public function edit(){
        return view('POS.product.edit');
    }
}
