<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\CustomerAccess;
use App\Access\CustomergroupAccess;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    function __construct() {
        $this->_customerAccess = new CustomerAccess();
        $this->_customergroupAccess = new CustomergroupAccess();
        $this->_customerSevice = new CustomerService();
    }

    public function index(Request $request){
        $customer = $this->_customerAccess->get($request);
        $customergroup = $this->_customergroupAccess->get($request);
        return view($request->screen.'.customer.index', ['customer' => $customer, 'customergroup' => $customergroup]);
    }

    public function add(Request $request){
        $customergroup = $this->_customergroupAccess->get($request);
        return view($request->screen.'.customer.add', ['customergroup' => $customergroup]);
    }

    public function insert(Request $request){
        $this->_customerAccess->insert($request);
        return redirect()->route('customer.index', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $customer = $this->_customerAccess->getFirst(['customer_id' => $request->customer_id]);
        $customergroup = $this->_customergroupAccess->get($request);
        return view($request->screen.'.customer.edit', ['customer' => $customer, 'customergroup' => $customergroup]);
    }

    public function update(Request $request){
        $this->_customerSevice->moveThumbnail($request);
        $this->_customerAccess->update($request);
        return redirect()->route('customer.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $this->_customerAccess->delete(['customer_id' => $request->customer_id]);
        return redirect()->route('customer.index', ['screen'=>'pos']);
    }
}
