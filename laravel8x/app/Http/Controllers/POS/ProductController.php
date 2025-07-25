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
        $this->_productSevice = new ProductService();
    }

    public function index(Request $request){
        $products = $this->_productAccess->get($request);
        $priceTotalInput = $this->_productAccess->priceTotalInput($request);
        $priceTotalOutput = $this->_productAccess->priceTotalOutput($request);
         
        $productype = $this->_productypeAccess->get($request);
        $totalProduct = array_sum(array_column($products, 'product_quantity'));
        
        $profitTotalEstimate = $priceTotalOutput - $priceTotalInput;

        return view($request->screen.'.product.index', [
            'products' => $products, 
            'priceTotalInput' => $priceTotalInput, 
            'productype' => $productype,
            'totalProduct' => $totalProduct,
            'profitTotalEstimate' => $profitTotalEstimate
        ]);
    }

    public function add(Request $request){
        $productype = $this->_productypeAccess->get($request);
        return view($request->screen.'.product.add', ['productype' => $productype]);
    }

    public function insert(Request $request){
        $this->_productSevice->moveThumbnail($request);
        $this->_productAccess->insert($request);
        return redirect()->route('product.add', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $product = $this->_productAccess->getFirst(['product_id' => $request->product_id]);
        $productype = $this->_productypeAccess->get($request);
        return view($request->screen.'.product.edit', ['product' => $product, 'productype' => $productype]);
    }

    public function update(Request $request){
        $this->_productSevice->moveThumbnail($request);
        $this->_productAccess->update($request);
        return redirect()->route('product.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $product = $this->_productAccess->getFirst(['product_id' => $request->product_id]);
        $this->_productSevice->deleteThumbnail($request, $product);
        $this->_productAccess->delete(['product_id' => $request->product_id]);
        return redirect()->route('product.index', ['screen'=>'pos']);
    }
}
