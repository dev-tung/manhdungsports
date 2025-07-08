<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\InvoiceAccess;
use App\Access\ProductAccess;
use App\Access\CustomerAccess;
use App\Access\ProductypeAccess;
use App\Services\InvoiceService;

class InvoiceController extends Controller
{
    function __construct() {
        $this->_invoiceAccess = new InvoiceAccess();
        $this->_productAccess = new ProductAccess();
        $this->_invoiceService = new InvoiceService();
        $this->_customerAccess = new CustomerAccess();
        $this->_productypeAccess = new ProductypeAccess();
    }

    public function index(Request $request){
        $invoices = $this->_invoiceAccess->get($request);
        $productypes = $this->_productypeAccess->get($request);
        $todayMoney = $this->_invoiceAccess->todayMoney();
        return view($request->screen.'.invoice.index', ['invoices' => $invoices,'productypes' => $productypes, 'todayMoney' => $todayMoney]);
    }

    public function add(Request $request){
        $customers = $this->_customerAccess->get($request);
        $products = $this->_productAccess->get($request);
        return view($request->screen.'.invoice.add', ['customers' => $customers, 'products' => $products]);
    }

    public function insert(Request $request){
        $this->_invoiceAccess->insert($request);
        return redirect()->route('invoice.index', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $customers = $this->_customerAccess->get($request);
        $products = $this->_productAccess->get($request);
        $invoice = $this->_invoiceAccess->getFirst(['invoice_id' => $request->invoice_id]);
        return view($request->screen.'.invoice.edit', ['invoice' => $invoice, 'customers' => $customers, 'products' => $products]);
    }

    public function update(Request $request){
        $this->_invoiceAccess->update($request);
        return redirect()->route('invoice.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $product = $this->_invoiceAccess->getFirst(['invoice_id' => $request->invoice_id]);
        $this->_invoiceAccess->delete(['invoice_id' => $request->invoice_id]);
        return redirect()->route('invoice.index', ['screen'=>'pos']);
    }
}
