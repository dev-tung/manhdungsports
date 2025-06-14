<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $_productModel;

    function __construct() {
        $this->_productModel = new Product;
    }

    public function index(){
        return view('pos.product.index');
    }

    public function add(){
        return view('pos.product.add');
    }

    public function create(Request $request){
        $this->_productModel->create($request);
    }

    public function edit(){
        return view('pos.product.edit');
    }
}
