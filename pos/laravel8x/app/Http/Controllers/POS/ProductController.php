<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;
use DB;

class ProductController 
{
    public function index(){
        return view('pos.product.index');
    }

    public function add(){
        return view('pos.product.add');
    }

    public function insert(Request $request){
        DB::table('product')->insert([
            'product_name' => $request->ProductName,
            'product_price_input' => $request->ProductPriceInput,
            'product_price_output' => $request->ProductPriceOutput,
            'product_description' => $request->ProductDescription,
            'product_quantity' => $request->ProductQuantity,
            'product_thumbnail' => $request->ProductName,
            'product_unit' => $request->ProductUnit
        ]);

        return redirect()->back();
    }

    public function edit(){
        return view('pos.product.edit');


    }
}
