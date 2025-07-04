<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\ProductorderAccess;
use App\Access\ProductAccess;
use App\Access\CustomerAccess;
use App\Access\ProductypeAccess;
use App\Services\ProductorderService;

class ProductorderController extends Controller
{
    function __construct() {
        $this->_productorderAccess = new ProductorderAccess();
        $this->_productAccess = new ProductAccess();
        $this->_productorderService = new ProductorderService();
        $this->_customerAccess = new CustomerAccess();
        $this->_productypeAccess = new ProductypeAccess();
    }

    public function index(Request $request){
        $productorders = $this->_productorderAccess->get($request);
        $productypes = $this->_productypeAccess->get($request);
        return view($request->screen.'.productorder.index', ['productorders' => $productorders,'productypes' => $productypes ]);
    }

    public function add(Request $request){
        $customers = $this->_customerAccess->get($request);
        $products = $this->_productAccess->get($request);
        return view($request->screen.'.productorder.add', ['customers' => $customers, 'products' => $products]);
    }

    public function insert(Request $request){
        $this->_productorderAccess->insert($request);
        return redirect()->route('productorder.index', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $customers = $this->_customerAccess->get($request);
        $products = $this->_productAccess->get($request);
        $productorder = $this->_productorderAccess->getFirst(['productorder_id' => $request->productorder_id]);
        return view($request->screen.'.productorder.edit', ['productorder' => $productorder, 'customers' => $customers, 'products' => $products]);
    }

    public function update(Request $request){
        $this->_productorderAccess->update($request);
        return redirect()->route('productorder.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $product = $this->_productorderAccess->getFirst(['productorder_id' => $request->productorder_id]);
        $this->_productorderAccess->delete(['productorder_id' => $request->productorder_id]);
        return redirect()->route('productorder.index', ['screen'=>'pos']);
    }
}
