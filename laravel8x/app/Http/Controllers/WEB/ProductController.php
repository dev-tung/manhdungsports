<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\WEB\Controller;
use Illuminate\Http\Request;
use App\Access\ProductAccess;
use App\Access\ProductypeAccess;
use App\Services\MediaService;

class ProductController extends Controller
{
    function __construct() {
        parent::__construct();
        $this->_productAccess = new ProductAccess();
        $this->_productypeAccess = new ProductypeAccess();
        $this->_mediaService = new MediaService();
    }

    public function index(Request $request){
        $products = $this->_productAccess->get($request);

        return view('web.product.index', [
            'products' => $products
        ]);
    }

    public function detail(Request $request){
        $product = $this->_productAccess->first(['product_id' => $request->product_id]);
        return view('web.product.detail', [
            'product' => $product
        ]);
    }

}
