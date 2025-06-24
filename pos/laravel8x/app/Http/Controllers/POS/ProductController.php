<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\ProductAccess;
use App\Access\ProductypeAccess;
use App\Services\ProductService;

class ProductController extends Controller
{
    function __construct() {
        $this->_productAccess = new ProductAccess();
        $this->_productypeAccess = new ProductypeAccess();
        $this->_productsevice = new ProductService();
    }

    public function index(Request $request){
        $searchParams = $this->_productsevice->searchParam($request);
        $product = $this->_productAccess->get($searchParams);
        $priceTotalInput = $this->_productAccess->priceTotalInput();
        $productype = $this->_productypeAccess->get();
        return view('POS.product.index', ['product' => $product, 'priceTotalInput' => $priceTotalInput, 'productype' => $productype]);
    }

    public function add(Request $request){
        $productype = $this->_productypeAccess->get();
        return view('POS.product.add', ['productype' => $productype]);
    }

    public function insert(Request $request){
        $this->_productsevice->moveThumbnail($request);
        $this->_productAccess->insert($request);
        return redirect()->route('product.add');
    }

    public function edit(Request $request){
        $product = $this->_productAccess->getFirst(['product_id' => $request->product_id]);
        $productype = $this->_productypeAccess->get();
        return view('POS.product.edit', ['product' => $product, 'productype' => $productype]);
    }

    public function update(Request $request){
        $this->_productsevice->moveThumbnail($request);
        $this->_productAccess->update($request);
        return redirect()->route('product.index');
    }

    public function delete(Request $request){
        $product = $this->_productAccess->getFirst(['product_id' => $request->product_id]);
        $this->_productsevice->deleteThumbnail($product);
        $this->_productAccess->delete(['product_id' => $request->product_id]);
        return redirect()->route('product.index');
    }
}
