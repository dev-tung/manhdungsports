<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\ExpenseAccess;
use View;

class ExpenseController extends Controller
{
    function __construct() {
        $this->_expenseAccess = new ExpenseAccess();
    }

    public function index(Request $request){
        $expenses = $this->_expenseAccess->get($request);
        return view('pos.expense.index', ['expenses' => $expenses]);
    }

    public function add(Request $request){
        return view('pos.expense.add');
    }

    public function insert(Request $request){
        $this->_expenseAccess->insert($request);
        return redirect()->route('expense.index');
    }

    public function edit(Request $request){
        $expense = $this->_expenseAccess->first(['expense_id' => $request->expense_id]);
        return view('pos.expense.edit', ['expense' => $expense]);
    }

    public function update(Request $request){
        $this->_expenseAccess->update($request);
        return redirect()->route('expense.index');
    }

    public function delete(Request $request){
        $string = $this->_expenseAccess->first(['expense_id' => $request->expense_id]);
        $this->_expenseAccess->delete(['expense_id' => $request->expense_id]);
        return redirect()->route('expense.index');
    }
}
