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
        return view($request->screen.'.expense.index', ['expenses' => $expenses]);
    }

    public function add(Request $request){
        return view($request->screen.'.expense.add');
    }

    public function insert(Request $request){
        $this->_expenseAccess->insert($request);
        return redirect()->route('expense.index', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $customers = $this->_customerAccess->get($request);
        $strings = $this->_stringAccess->get($request);
        $expense = $this->_expenseAccess->getFirst(['expense_id' => $request->expense_id]);
        return view($request->screen.'.expense.edit', ['expense' => $expense, 'customers' => $customers, 'strings' => $strings]);
    }

    public function update(Request $request){
        $this->_expenseAccess->update($request);
        return redirect()->route('expense.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $string = $this->_expenseAccess->getFirst(['expense_id' => $request->expense_id]);
        $this->_expenseAccess->delete(['expense_id' => $request->expense_id]);
        return redirect()->route('expense.index', ['screen'=>'pos']);
    }
}
