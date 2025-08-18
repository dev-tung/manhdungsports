<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Access\ProductAccess;
use App\Access\ProductgroupAccess;
use App\Services\MediaService;

class ProductController extends Controller
{
    function __construct() {
        $this->_productAccess = new ProductAccess();
    }

    public function get(Request $request){
        $products = $this->_productAccess->selling();
        foreach( $products as $key => $product ){
            $products[$key]->product_color  = productColor($product->product_color);
            $products[$key]->product_size   = productSize($product->product_size);
            $products[$key]->product_unit   = productUnit($product->product_unit);
            $products[$key]->product_gender = productGender($product->product_gender);
            $products[$key]->product_source = productSource($product->product_source);
            $products[$key]->product_price_input = commonNumberToVND($product->product_price_input);
            $products[$key]->product_price_output = commonNumberToVND($product->product_price_output);
        }
        
        return response()->json([
            'success' => true,
            'products' => $products
        ], Response::HTTP_OK);
    }
}
