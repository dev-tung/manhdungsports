<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Access\ProductAccess;

class StringController extends Controller
{

    function __construct() {
        $this->_productAccess = new ProductAccess();
    }

    public function table(Request $request){
        $string = $this->_productAccess->stringTable();
        return view('pos.string.table', ['string' => $string]);
    }
}