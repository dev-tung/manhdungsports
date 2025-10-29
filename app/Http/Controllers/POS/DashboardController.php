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
        
        $priceTotalInput = $this->_productAccess->priceTotalInputNoDrop();
        $debtTotalInput = $this->_invoiceAccess->debtTotalInput();

        $todayInvoiceMoney = $this->_invoiceAccess->todayMoney();
        $todayExpenseMoney = $this->_expenseAccess->todayMoney();
        $todayTotalRevenue = array_sum(array_column($todayInvoiceMoney, 'invoice_revenue'));
        $todayExpenseMoney = array_sum(array_column($todayExpenseMoney, 'expense_money'));
        $todayTotalProfit  = array_sum(array_column($todayInvoiceMoney, 'invoice_profit'));
        $todayTotalActualProfit  = array_sum(array_column($todayInvoiceMoney, 'invoice_profit')) - $todayExpenseMoney;
        
        $thismonthInvoiceMoney = $this->_invoiceAccess->thismonthMoney();
        $thismonthExpenseMoney = $this->_expenseAccess->thismonthMoney();
        $thismonthTotalRevenue = array_sum(array_column($thismonthInvoiceMoney, 'invoice_revenue'));
        $thismonthExpenseMoney = array_sum(array_column($thismonthExpenseMoney, 'expense_money'));
        $thismonthTotalProfit  = array_sum(array_column($thismonthInvoiceMoney, 'invoice_profit'));
        $thismonthTotalActualProfit  = array_sum(array_column($thismonthInvoiceMoney, 'invoice_profit')) - $thismonthExpenseMoney;
        

        return view('pos.dashboard.index', [
            'priceTotalInput' => commonNumberToVND($priceTotalInput),
            'debtTotalInput'  => commonNumberToVND($debtTotalInput->customerDebt),

            'todayTotalRevenue' => commonNumberToVND($todayTotalRevenue),
            'todayTotalProfit'  => commonNumberToVND($todayTotalProfit),
            'todayExpenseMoney' => commonNumberToVND($todayExpenseMoney),
            'todayTotalActualProfit' => commonNumberToVND($todayTotalActualProfit),

            'thismonthTotalRevenue' => commonNumberToVND($thismonthTotalRevenue),
            'thismonthTotalProfit'  => commonNumberToVND($thismonthTotalProfit),
            'thismonthExpenseMoney' => commonNumberToVND($thismonthExpenseMoney),
            'thismonthTotalActualProfit' => commonNumberToVND($thismonthTotalActualProfit)
        ]);
    }
}
