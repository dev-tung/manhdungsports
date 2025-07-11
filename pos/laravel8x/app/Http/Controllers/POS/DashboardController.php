<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Access\InvoiceAccess;
use App\Access\ExpenseAccess;
use App\Access\ProductAccess;

class DashboardController extends Controller
{
    function __construct() {
        $this->_invoiceAccess = new InvoiceAccess();
        $this->_expenseAccess = new ExpenseAccess();
        $this->_productAccess = new ProductAccess();
    }

    public function index(Request $request){
        $todayInvoiceMoney  = $this->_invoiceAccess->todayMoney();
        $todayExpenseMoney  = $this->_expenseAccess->todayMoney();
        $priceTotalInput    = $this->_productAccess->priceTotalInput();

        $todayTotalRevenue = array_sum(array_column($todayInvoiceMoney, 'invoice_revenue'));
        $todayExpenseMoney = array_sum(array_column($todayExpenseMoney, 'expense_money'));
        $todayTotalProfit  = array_sum(array_column($todayInvoiceMoney, 'invoice_profit')) - $todayExpenseMoney;

        return view($request->screen.'.dashboard.index', [
            'todayTotalRevenue' => commonNumberToVND($todayTotalRevenue),
            'todayTotalProfit'  => commonNumberToVND($todayTotalProfit),
            'todayExpenseMoney' => commonNumberToVND($todayExpenseMoney),
            'priceTotalInput'   => commonNumberToVND($priceTotalInput)
        ]);
    }
}
