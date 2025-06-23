<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Dbaccess\Product;

class ProductController extends Controller
{

    private $_db_product;
    private $_fileController;

    function __construct() {
        $this->_dbProduct = new Product();
        $this->_fileController = new FileController();
    }

    public function index(Request $request){
        $products = $this->_dbProduct->get([
            ['product_name', 'like', '%' . $request->product_name . '%'], 
            ['product_category', 'like', '%' . $request->product_category . '%']
        ]);
        
        return view('POS.product.index', ['products' => $products]);
    }

    public function add(Request $request){
        return view('POS.product.add');
    }

    public function insert(Request $request){
        if( !empty( $request->product_thumbnail ) ){
            $request->oldPath = 'upload/product/tmp/'.$request->product_thumbnail;
            $request->newPath = 'upload/product/'.$request->product_thumbnail;
            $this->_fileController->move($request);
        }

        $request->directory = 'upload/product/tmp';
        $this->_fileController->deleteDirectory($request);

        $this->_dbProduct->insert($request);
        return redirect()->back();
    }

    public function edit(Request $request){
        $product = $this->_dbProduct->getFirst(['product_id' => $request->product_id]);
        return view('POS.product.edit', ['product' => $product]);
    }

    public function update(Request $request){
        if( !empty( $request->product_thumbnail ) ){
            $request->oldPath = 'upload/product/tmp/'.$request->product_thumbnail;
            if( file_exists($request->oldPath) ){
                $request->newPath = 'upload/product/'.$request->product_thumbnail;
                $this->_fileController->move($request);
                $request->directory = 'upload/product/tmp';
                $this->_fileController->deleteDirectory($request);
            }
        }

        $this->_dbProduct->update($request);
        return redirect()->back();
    }

    public function delete(Request $request){
        
        $product = $this->_dbProduct->getFirst(['product_id' => $request->product_id]);
        
        if( $product->product_thumbnail ){
            $request->filePath = $product->product_thumbnail;
            $this->_fileController->delete($request);
        }

        $this->_dbProduct->delete(['product_id' => $request->product_id]);
        return redirect()->route('product.index');
    }
}
