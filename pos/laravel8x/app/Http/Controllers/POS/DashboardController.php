<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Access\InvoiceAccess;
use App\Access\ExpenseAccess;

class DashboardController extends Controller
{
    function __construct() {
        $this->_invoiceAccess = new InvoiceAccess();
        $this->_expenseAccess = new ExpenseAccess();
    }

    public function index(Request $request){
        $todayInvoiceMoney = $this->_invoiceAccess->todayMoney();
        $todayExpenseMoney = $this->_expenseAccess->todayMoney();

        $todayTotalRevenue = array_sum(array_column($todayInvoiceMoney, 'invoice_revenue'));
        $todayTotalProfit = array_sum(array_column($todayInvoiceMoney, 'invoice_profit'));
        $todayExpenseMoney = array_sum(array_column($todayExpenseMoney, 'expense_money'));

        return view($request->screen.'.dashboard.index', [
            'todayTotalRevenue' => commonNumberToVND($todayTotalRevenue),
            'todayTotalProfit' => commonNumberToVND($todayTotalProfit),
            'todayExpenseMoney' => commonNumberToVND($todayExpenseMoney)
        ]);
    }
}
