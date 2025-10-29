<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Access\ProductAccess;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct() {
        $this->_productAccess = new ProductAccess();
        $products = $this->_productAccess->homepage();
        $productClassification = productClassification($products);
        View::share('productypes', $productClassification['productypes']);
    }
}
