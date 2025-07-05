<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\StringorderAccess;
use App\Access\StringAccess;
use App\Access\CustomerAccess;
use View;

class StringorderController extends Controller
{
    function __construct() {
        $this->_stringorderAccess = new StringorderAccess();
        $this->_stringAccess = new StringAccess();
        $this->_customerAccess = new CustomerAccess();
    }

    public function index(Request $request){
        $stringorders = $this->_stringorderAccess->get($request);
        $customers = $this->_customerAccess->get();
        $todayMoney = $this->_stringorderAccess->todayMoney();
        return view($request->screen.'.stringorder.index', ['customers' => $customers, 'stringorders' => $stringorders, 'todayMoney' => $todayMoney]);
    }

    public function add(Request $request){
        $customers = $this->_customerAccess->get($request);
        $strings = $this->_stringAccess->get($request);
        return view($request->screen.'.stringorder.add', ['customers' => $customers, 'strings' => $strings]);
    }

    public function insert(Request $request){
        $this->_stringorderAccess->insert($request);
        return redirect()->route('stringorder.index', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $customers = $this->_customerAccess->get($request);
        $strings = $this->_stringAccess->get($request);
        $stringorder = $this->_stringorderAccess->getFirst(['stringorder_id' => $request->stringorder_id]);
        return view($request->screen.'.stringorder.edit', ['stringorder' => $stringorder, 'customers' => $customers, 'strings' => $strings]);
    }

    public function update(Request $request){
        $this->_stringorderAccess->update($request);
        return redirect()->route('stringorder.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $string = $this->_stringorderAccess->getFirst(['stringorder_id' => $request->stringorder_id]);
        $this->_stringorderAccess->delete(['stringorder_id' => $request->stringorder_id]);
        return redirect()->route('stringorder.index', ['screen'=>'pos']);
    }
}
