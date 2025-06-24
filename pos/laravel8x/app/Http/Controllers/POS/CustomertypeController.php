<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Access\CustomertypeAccess;

class CustomertypeController extends Controller
{

    function __construct() {
        $this->_customertypeAccess = new CustomertypeAccess();
    }

    public function index(Request $request){
        $customertype = $this->_customertypeAccess->get([
            ['customertype_name', 'like', '%' . $request->customertype_name . '%']
        ]);
        return view('POS.customertype.index', ['customertype' => $customertype]);
    }

    public function add(Request $request){
        $customertype = $this->_customertypeAccess->get();
        return view('POS.customertype.add', ['customertype' => $customertype]);
    }

    public function insert(Request $request){
        $this->_customertypeAccess->insert($request);
        return redirect()->route('customertype.index');
    }

    public function edit(Request $request){
        $customertype = $this->_customertypeAccess->getFirst(['customertype_id' => $request->customertype_id]);
        $customertypes = $this->_customertypeAccess->get();
        return view('POS.customertype.edit', ['customertypes' => $customertypes, 'customertype' => $customertype]);
    }

    public function update(Request $request){
        $this->_customertypeAccess->update($request);
        return redirect()->route('customertype.index');
    }

    public function delete(Request $request){
        $this->_customertypeAccess->delete(['customertype_id' => $request->customertype_id]);
        return redirect()->route('customertype.index');
    }
}
