<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Access\ProductAccess;
use App\Access\ProductgroupAccess;
use App\Services\ProductService;

class ProductController extends Controller
{
    function __construct() {
        $this->_productAccess = new ProductAccess();
    }

    public function get(Request $request){
        $products = $this->_productAccess->get($request);
        return response()->json([
            'success' => true,
            'products' => $products
        ], Response::HTTP_OK);
    }
}
