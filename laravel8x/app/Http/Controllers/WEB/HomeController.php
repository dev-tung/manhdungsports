<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Access\InvoiceAccess;
use App\Access\ExpenseAccess;
use App\Access\ProductAccess;

class HomeController extends Controller
{
    function __construct() {
        $this->_invoiceAccess = new InvoiceAccess();
        $this->_expenseAccess = new ExpenseAccess();
        $this->_productAccess = new ProductAccess();
    }

    public function index(Request $request){
        return view('web.home.index');
    }
}
