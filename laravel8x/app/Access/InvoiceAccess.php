<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

class InvoiceAccess extends Access{

    private $table = 'invoice';

    public function search($request){
        $searchParams = [];

        if( !empty($request->invoice_name) ) {
            $searchParams[] = ["CONCAT_WS(customer_name, ' ', customergroup_name, ' ', product_name)", 'like', '%' . $request->invoice_name . '%'];
        }

        if( !empty($request->productype_id) ){
            $searchParams[] = ['productype.productype_id', 'like', '%' . $request->productype_id . '%'];
        }

        if( isset($request->invoice_ispayment) && $request->invoice_ispayment != ''){
            $searchParams[] = ['invoice_ispayment', '=', $request->invoice_ispayment];
        }
        
        if( !empty($request->invoice_created_at_from) ){
            $searchParams[] = ['invoice_created_at', '>=', $request->invoice_created_at_from . ' 00:00:00'];
        }

        if( !empty($request->invoice_created_at_to) ){
            $searchParams[] = ['invoice_created_at', '<=', $request->invoice_created_at_to .' 12:00:00'];
        }

        return $this->buildCondition($searchParams);
    }

    public function get( $request){
        $WHERE = $this->search($request);
        $query = "
            SELECT * FROM invoice
            JOIN customer ON invoice.customer_id = customer.customer_id
            JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN product ON invoice.product_id = product.product_id
            JOIN productype ON productype.productype_id = product.productype_id
            $WHERE
            ORDER BY invoice_created_at DESC, customer.customer_name
        ";
        return DB::select($query);
    }

    public function todayMoney(){
        $query = "
            SELECT 
                 invoice_profit
                ,invoice_revenue 
            FROM invoice 
            JOIN customer ON invoice.customer_id = customer.customer_id
            JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN product ON invoice.product_id = product.product_id
            JOIN productype ON productype.productype_id = product.productype_id
            WHERE DATE(invoice_created_at) = CURDATE()
        ";
        return DB::select($query);
    }

    public function thismonthMoney(){
        $query = "
            SELECT 
                 invoice_profit
                ,invoice_revenue 
            FROM invoice 
            JOIN customer ON invoice.customer_id = customer.customer_id
            JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN product ON invoice.product_id = product.product_id
            JOIN productype ON productype.productype_id = product.productype_id
            WHERE MONTH(invoice_created_at) = MONTH(CURRENT_DATE())
        ";
        return DB::select($query);
    }

    public function debtTotalInput(){
        $query = "
            SELECT 
			SUM(invoice_revenue) AS customerDebt
            FROM invoice 
			WHERE invoice_ispayment = 0  AND invoice_status = 2;
        ";
        $invoice = DB::select($query);
        if( !empty( $invoice ) && isset( $invoice[0] ) ){
            return $invoice[0];
        }
    }


    public function first( $invoice_id ){
        $query = "
            SELECT 
                 *
            FROM invoice 
            JOIN customer ON invoice.customer_id = customer.customer_id
            JOIN product ON invoice.product_id = product.product_id
            WHERE invoice_id = $invoice_id
        ";
        $invoice = DB::select($query);
        if( !empty( $invoice ) && isset( $invoice[0] ) ){
            return $invoice[0];
        }
    }

    public function insert($request, $product){

        $param['customer_id'] = $request['customer_id'];
        $param['invoice_description'] = $request['invoice_description'];
        $param['product_id'] = $request['product_id'];
        $param['invoice_status'] = $request['invoice_status'];
        $param['invoice_timereturn'] = $request['invoice_timereturn'];
        $param['invoice_ispayment'] = $request['invoice_ispayment'];
        $param['invoice_quantity'] = $request['invoice_quantity'];
        $param['invoice_revenue'] = invoiceRevenue($request, $product, false);
        $param['invoice_profit'] = invoiceProfit($request, $product, false);
        $param['invoice_discount'] = invoiceDiscount($request, $product, false);
        $param['invoice_created_at'] = $request['invoice_created_at'];
        $param['invoice_updated_at'] = Carbon::now()->format('Y-m-d');

        DB::table($this->table)->insert( $param );
    }

    public function update($request, $product){
        $param['customer_id'] = $request['customer_id'];
        $param['invoice_description'] = $request['invoice_description'];
        $param['product_id'] = $request['product_id'];
        $param['invoice_status'] = $request['invoice_status'];
        $param['invoice_timereturn'] = $request['invoice_timereturn'];
        $param['invoice_ispayment'] = $request['invoice_ispayment'];
        $param['invoice_quantity'] = $request['invoice_quantity'];
        $param['invoice_revenue'] = invoiceRevenue($request, $product, false);
        $param['invoice_profit'] = invoiceProfit($request, $product, false);
        $param['invoice_discount'] = invoiceDiscount($request, $product, false);
        $param['invoice_created_at'] = $request['invoice_created_at'];
        $param['invoice_updated_at'] = Carbon::now()->format('Y-m-d');

        DB::table($this->table)
        ->where('invoice_id', $request->invoice_id)
        ->update($param);
    }

    public function status($request){
        $param['invoice_status'] = $request['invoice_status'];
        $param['invoice_updated_at'] = Carbon::now()->format('Y-m-d');

        DB::table($this->table)
        ->where('invoice_id', $request->invoice_id)
        ->update($param);
    }

    public function ispayment($request){
        $param['invoice_ispayment'] = $request['invoice_ispayment'];
        $param['invoice_updated_at'] = Carbon::now()->format('Y-m-d');

        DB::table($this->table)
        ->where('invoice_id', $request->invoice_id)
        ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
