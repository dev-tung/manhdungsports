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
        $product = $this->_productAccess->get($request);
        $priceTotalInput = $this->_productAccess->priceTotalInput();
        $productype = $this->_productypeAccess->get($request);
        return view($request->screen.'.product.index', [
            'product' => $product, 
            'priceTotalInput' => $priceTotalInput, 
            'productype' => $productype
        ]);
    }

    public function add(Request $request){
        $productype = $this->_productypeAccess->get($request);
        return view($request->screen.'.product.add', ['productype' => $productype]);
    }

    public function insert(Request $request){
        $this->_productsevice->moveThumbnail($request);
        $this->_productAccess->insert($request);
        return redirect()->route('product.add', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $product = $this->_productAccess->getFirst(['product_id' => $request->product_id]);
        $productype = $this->_productypeAccess->get($request);
        return view($request->screen.'.product.edit', ['product' => $product, 'productype' => $productype]);
    }

    public function update(Request $request){
        $this->_productsevice->moveThumbnail($request);
        $this->_productAccess->update($request);
        return redirect()->route('product.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $product = $this->_productAccess->getFirst(['product_id' => $request->product_id]);
        $this->_productsevice->deleteThumbnail($request, $product);
        $this->_productAccess->delete(['product_id' => $request->product_id]);
        return redirect()->route('product.index', ['screen'=>'pos']);
    }
}
