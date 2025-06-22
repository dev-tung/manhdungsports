<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\API\FileController;

class ProductController extends Controller
{

    public function index(Request $request){
        $products = Product::where([
            ['product_name', 'like', '%' . $request->product_name . '%'], 
            ['product_category', 'like', '%' . $request->product_category . '%']
        ])->get();
        
        return view('POS.product.index', ['products' => $products]);
    }

    public function add(Request $request){
        return view('POS.product.add');
    }

    public function create(Request $request){

        $fileController = new FileController();

        if( !empty( $request->product_thumbnail ) ){
            $request->oldPath = 'upload/product/tmp/'.$request->product_thumbnail;
            $request->newPath = 'upload/product/'.$request->product_thumbnail;
            $fileController->move($request);
        }

        $request->directory = 'upload/product/tmp';
        $fileController->deleteDirectory($request);

        Product::add($request);
        return redirect()->back();
    }

    public function edit(Request $request){
        $product = Product::where('product_id', $request->product_id)->first();
        return view('POS.product.edit', ['product' => $product]);
    }

    public function update(Request $request){

        $fileController = new FileController();

        if( !empty( $request->product_thumbnail ) ){
            $request->oldPath = 'upload/product/tmp/'.$request->product_thumbnail;
            $request->newPath = 'upload/product/'.$request->product_thumbnail;
            $fileController->move($request);
        }

        $request->directory = 'upload/product/tmp';
        $fileController->deleteDirectory($request);

        Product::edit($request);
        return redirect()->back();
    }

    public function delete(Request $request){
        Product::where('product_id', $request->product_id)->delete();
        return redirect()->route('product.index');
    }
}
