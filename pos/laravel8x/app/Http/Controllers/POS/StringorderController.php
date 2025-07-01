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
        $this->_access = new StringorderAccess();
        $this->_stringAccess = new StringAccess();
        $this->_customerAccess = new CustomerAccess();
    }

    public function index(Request $request){
        $stringorders = $this->_access->get($request);
        return view($request->screen.'.stringorder.index', ['stringorders' => $stringorders]);
    }

    public function add(Request $request){
        $customers = $this->_customerAccess->get($request);
        $strings = $this->_stringAccess->get($request);
        return view($request->screen.'.stringorder.add', ['customers' => $customers, 'strings' => $strings]);
    }

    public function insert(Request $request){
        $this->_access->insert($request);
        return redirect()->route('stringorder.index', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $customers = $this->_customerAccess->get($request);
        $strings = $this->_stringAccess->get($request);
        $stringorder = $this->_access->getFirst(['stringorder_id' => $request->stringorder_id]);
        return view($request->screen.'.stringorder.edit', ['stringorder' => $stringorder, 'customers' => $customers, 'strings' => $strings]);
    }

    public function update(Request $request){
        $this->_access->update($request);
        return redirect()->route('stringorder.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $string = $this->_access->getFirst(['stringorder_id' => $request->stringorder_id]);
        $this->_access->delete(['stringorder_id' => $request->stringorder_id]);
        return redirect()->route('stringorder.index', ['screen'=>'pos']);
    }
}
