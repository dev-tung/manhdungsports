<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Dbaccess\Product;
use App\Dbaccess\Category;

class ProductController extends Controller
{

    private $_db_product;
    private $_fileController;
    private $_db_category;

    function __construct() {
        $this->_dbProduct = new Product();
        $this->_fileController = new FileController();
        $this->_dbCategory = new Category();
    }

    public function index(Request $request){
        $searchParams = [];

        if( !empty($request->product_name) ){
            $searchParams[] = ['product_name', 'like', '%' . $request->product_name . '%'];
        }

        if( !empty($request->product_category) ){
            $searchParams[] = ['product_category', 'like', '%' . $request->product_category . '%'];
        }

        $products = $this->_dbProduct->get($searchParams);

        $totalprice = $this->_dbProduct->getPriceTotalInput();
        
        return view('POS.product.index', ['products' => $products, 'totalprice' => $totalprice]);
    }

    public function add(Request $request){
        $categories = $this->_dbCategory->get();
        return view('POS.product.add', ['categories' => $categories]);
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
        return redirect()->route('product.index');
    }

    public function edit(Request $request){
        $product = $this->_dbProduct->getFirst(['product_id' => $request->product_id]);
        $categories = $this->_dbCategory->get();
        return view('POS.product.edit', ['product' => $product, 'categories' => $categories]);
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
        return redirect()->route('product.index');
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
