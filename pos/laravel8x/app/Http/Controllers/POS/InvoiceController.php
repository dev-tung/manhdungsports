<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\StringorderAccess;
use App\Access\ProductorderAccess;
use App\Access\CustomerAccess;

class InvoiceController extends Controller
{
    function __construct() {
        $this->_productorderAccess = new ProductorderAccess();
        $this->_stringorderAccess = new StringorderAccess();
        $this->_customerAccess = new CustomerAccess();
    }

    public function index(Request $request){
        $productorders = $this->_productorderAccess->get($request);
        $stringorders = $this->_stringorderAccess->get($request);
        $customers = $this->_customerAccess->get($request);

        return view($request->screen.'.invoice.index', ['productorders' => $productorders, 'stringorders' => $stringorders, 'customers' => $customers]);
    }

}
