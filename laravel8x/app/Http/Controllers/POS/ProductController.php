<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\ProductAccess;
use App\Access\ProductypeAccess;
use App\Services\MediaService;

class ProductController extends Controller
{
    function __construct() {
        $this->_productAccess = new ProductAccess();
        $this->_productypeAccess = new ProductypeAccess();
        $this->_mediaService = new MediaService();
    }

    public function index(Request $request){
        $products = $this->_productAccess->get($request);
        $priceTotalInput = $this->_productAccess->priceTotalInput($request);
        $priceTotalOutput = $this->_productAccess->priceTotalOutput($request);
         
        $productype = $this->_productypeAccess->get($request);
        $totalProduct = array_sum(array_column($products, 'product_quantity'));
        
        $profitTotalEstimate = $priceTotalOutput - $priceTotalInput;

        return view('pos.product.index', [
            'products' => $products, 
            'priceTotalInput' => $priceTotalInput, 
            'productype' => $productype,
            'totalProduct' => $totalProduct,
            'profitTotalEstimate' => $profitTotalEstimate
        ]);
    }

    public function add(Request $request){
        $productype = $this->_productypeAccess->get($request);
        return view('pos.product.add', ['productype' => $productype]);
    }

    public function insert(Request $request){
        $this->_mediaService->moveThumbnail($request);
        $this->_productAccess->insert($request);
        return redirect()->route('product.add');
    }

    public function edit(Request $request){
        $product = $this->_productAccess->first(['product_id' => $request->product_id]);
        $productype = $this->_productypeAccess->get($request);
        return view('pos.product.edit', ['product' => $product, 'productype' => $productype]);
    }

    public function update(Request $request){
        $this->_mediaService->moveThumbnail($request);
        $this->_productAccess->update($request);
        return redirect()->route('product.index');
    }

    public function delete(Request $request){
        $product = $this->_productAccess->first(['product_id' => $request->product_id]);
        $this->_mediaService->deleteThumbnail($request, $product);
        $this->_productAccess->delete(['product_id' => $request->product_id]);
        return redirect()->route('product.index');
    }
}
