<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Access\CustomergroupAccess;

class CustomergroupController extends Controller
{

    function __construct() {
        $this->_customergroupAccess = new CustomergroupAccess();
    }

    public function index(Request $request){
        $customergroup = $this->_customergroupAccess->get($request);
        return view('pos.customergroup.index', ['customergroup' => $customergroup]);
    }

    public function add(Request $request){
        return view('pos.customergroup.add');
    }

    public function insert(Request $request){
        $this->_customergroupAccess->insert($request);
        return redirect()->route('customergroup.index');
    }

    public function edit(Request $request){
        $customergroup = $this->_customergroupAccess->first(['customergroup_id' => $request->customergroup_id]);
        return view('pos.customergroup.edit', ['customergroup' => $customergroup]);
    }

    public function update(Request $request){
        $this->_customergroupAccess->update($request);
        return redirect()->route('customergroup.index');
    }

    public function delete(Request $request){
        $this->_customergroupAccess->delete(['customergroup_id' => $request->customergroup_id]);
        return redirect()->route('customergroup.index');
    }
}
