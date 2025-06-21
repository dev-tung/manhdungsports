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

    public function edit(){
        return view('POS.product.edit');
    }
}
