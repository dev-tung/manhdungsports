<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Access\ProductorderAccess;
use App\Access\StringorderAccess;
use App\Access\ExpenseAccess;

class DashboardController extends Controller
{
    function __construct() {
        $this->_productorderAccess = new ProductorderAccess();
        $this->_stringorderAccess = new StringorderAccess();
        $this->_expenseAccess = new ExpenseAccess();
    }

    public function index(Request $request){
        $todayProductorderMoney = $this->_productorderAccess->todayMoney();
        $todayStringorderMoney = $this->_stringorderAccess->todayMoney();
        $todayExpenseMoney = $this->_expenseAccess->todayMoney();

        $todayTotalRevenue = 
        array_sum(array_column($todayProductorderMoney, 'productorder_revenue')) 
        + array_sum(array_column($todayStringorderMoney, 'stringorder_revenue'));

        $todayTotalProfit = 
        array_sum(array_column($todayProductorderMoney, 'productorder_profit')) 
        + array_sum(array_column($todayStringorderMoney, 'stringorder_profit'));

        $todayExpenseMoney = array_sum(array_column($todayExpenseMoney, 'expense_money'));

        return view($request->screen.'.dashboard.index', [
            'todayTotalRevenue' => commonNumberToVND($todayTotalRevenue),
            'todayTotalProfit' => commonNumberToVND($todayTotalProfit),
            'todayExpenseMoney' => commonNumberToVND($todayExpenseMoney)
        ]);
    }
}
