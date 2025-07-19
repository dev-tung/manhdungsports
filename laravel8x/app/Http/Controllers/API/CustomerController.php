<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Access\CustomerAccess;
use App\Access\CustomergroupAccess;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    function __construct() {
        $this->_customerAccess = new CustomerAccess();
        $this->_customergroupAccess = new CustomergroupAccess();
        $this->_customersevice = new CustomerService();
    }

    public function get(Request $request){
        $customers = $this->_customerAccess->get($request);
        return response()->json([
            'success' => true,
            'customers' => $customers
        ], Response::HTTP_OK);
    }
}
