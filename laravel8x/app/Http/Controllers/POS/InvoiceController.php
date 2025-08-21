<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\InvoiceAccess;
use App\Access\ExpenseAccess;
use App\Access\ProductAccess;
use App\Access\CustomerAccess;
use App\Access\ProductypeAccess;
use App\Services\InvoiceService;

class InvoiceController extends Controller
{
    function __construct() {
        $this->_invoiceAccess = new InvoiceAccess();
        $this->_productAccess = new ProductAccess();
        $this->_expenseAccess = new ExpenseAccess();
        $this->_invoiceService = new InvoiceService();
        $this->_customerAccess = new CustomerAccess();
        $this->_productypeAccess = new ProductypeAccess();
    }

    public function index(Request $request){
        $invoices = $this->_invoiceAccess->get($request);
        $productypes = $this->_productypeAccess->get($request);
        return view('pos.invoice.index', ['invoices' => $invoices,'productypes' => $productypes]);
    }

    public function add(Request $request){
        $customers = $this->_customerAccess->get($request);
        $products = $this->_productAccess->selling();
        return view('pos.invoice.add', ['customers' => $customers, 'products' => $products]);
    }

    public function order(Request $request){
        $customers = $this->_customerAccess->get($request);
        $products = $this->_productAccess->get($request);
        return view('pos.invoice.order', ['customers' => $customers, 'products' => $products]);
    }

    public function insert(Request $request){
        $product = $this->_productAccess->first(['product_id' => $request->product_id]);
        $this->_invoiceAccess->insert($request, $product);
        $this->_productAccess->updateQuantity($request, $product);
        return redirect()->route('invoice.index');
    }

    public function edit(Request $request){
        $customers = $this->_customerAccess->get($request);
        $products = $this->_productAccess->get($request);
        $invoice = $this->_invoiceAccess->first($request->invoice_id);
        return view('pos.invoice.edit', ['invoice' => $invoice, 'customers' => $customers, 'products' => $products]);
    }

    public function update(Request $request){
        $product = $this->_productAccess->first(['product_id' => $request->product_id]);
        $this->_invoiceAccess->update($request, $product);
        $this->_productAccess->updateQuantity($request, $product);
        return redirect()->route('invoice.index');
    }

    public function delete(Request $request){
        $product = $this->_invoiceAccess->first($request->invoice_id);
        $this->_invoiceAccess->delete(['invoice_id' => $request->invoice_id]);
        return redirect()->route('invoice.index');
    }
}
