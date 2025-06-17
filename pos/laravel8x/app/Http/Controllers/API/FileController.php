<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class FileController extends Controller
{
    public function upload(){
        $products = Product::get();
        return response()->json($products, Response::HTTP_OK);
    }
}
