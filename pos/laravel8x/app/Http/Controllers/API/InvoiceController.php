<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Access\InvoiceAccess;

class InvoiceController extends Controller
{
    function __construct() {
        $this->_invoiceAccess = new InvoiceAccess();
    }

    public function status(Request $request){
        $this->_invoiceAccess->status($request);
        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }

    public function ispayment(Request $request){
        $this->_invoiceAccess->ispayment($request);
        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }
}
