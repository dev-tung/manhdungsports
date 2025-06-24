<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\CustomerAccess;
use App\Access\CustomertypeAccess;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    function __construct() {
        $this->_customerAccess = new CustomerAccess();
        $this->_customertypeAccess = new CustomertypeAccess();
        $this->_customersevice = new CustomerService();
    }

    public function index(Request $request){
        $searchParams = $this->_customersevice->searchParam($request);
        $customer = $this->_customerAccess->get($searchParams);
        $customertype = $this->_customertypeAccess->get();
        return view('POS.customer.index', ['customer' => $customer, 'customertype' => $customertype]);
    }

    public function add(Request $request){
        $customertype = $this->_customertypeAccess->get();
        return view('POS.customer.add', ['customertype' => $customertype]);
    }

    public function insert(Request $request){
        $this->_customersevice->moveThumbnail($request);
        $this->_customerAccess->insert($request);
        return redirect()->route('customer.add');
    }

    public function edit(Request $request){
        $customer = $this->_customerAccess->getFirst(['customer_id' => $request->customer_id]);
        $customertype = $this->_customertypeAccess->get();
        return view('POS.customer.edit', ['customer' => $customer, 'customertype' => $customertype]);
    }

    public function update(Request $request){
        $this->_customersevice->moveThumbnail($request);
        $this->_customerAccess->update($request);
        return redirect()->route('customer.index');
    }

    public function delete(Request $request){
        $customer = $this->_customerAccess->getFirst(['customer_id' => $request->customer_id]);
        $this->_customersevice->deleteThumbnail($customer);
        $this->_customerAccess->delete(['customer_id' => $request->customer_id]);
        return redirect()->route('customer.index');
    }
}
