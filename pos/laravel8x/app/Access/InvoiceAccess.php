<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

class InvoiceAccess extends Access{

    private $table = 'invoice';

    public function searchParam($request){
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

        return $searchParams;
    }

    public function get( $request){
        $searchParam = $this->searchParam($request);
        $WHERE = $this->conditionBuilder($searchParam);
        $query = "
            SELECT * FROM invoice
            JOIN customer ON invoice.customer_id = customer.customer_id
            JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN product ON invoice.product_id = product.product_id
            JOIN productype ON productype.productype_id = product.productype_id
            $WHERE
            ORDER BY invoice_created_at DESC
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


    public function getFirst( $searchParams ){
        $query = DB::table($this->table);
        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->first();
    }

    public function insert($request){
        $param['customer_id'] = $request['customer_id'];
        $param['invoice_description'] = $request['invoice_description'];
        $param['product_id'] = $request['product_id'];
        $param['invoice_status'] = $request['invoice_status'];
        $param['invoice_timereturn'] = $request['invoice_timereturn'];
        $param['invoice_ispayment'] = $request['invoice_ispayment'];
        $param['invoice_discount'] = $request['invoice_discount'];
        $param['invoice_quantity'] = $request['invoice_quantity'];
        $param['invoice_revenue'] = invoiceRevenue($request, false);
        $param['invoice_profit'] = invoiceProfit($request, false);
        $param['invoice_created_at'] = Carbon::now();
        $param['invoice_updated_at'] = Carbon::now();
        DB::table($this->table)->insert( $param );
    }

    public function update($request){
        $param['customer_id'] = $request['customer_id'];
        $param['invoice_description'] = $request['invoice_description'];
        $param['product_id'] = $request['product_id'];
        $param['invoice_status'] = $request['invoice_status'];
        $param['invoice_timereturn'] = $request['invoice_timereturn'];
        $param['invoice_ispayment'] = $request['invoice_ispayment'];
        $param['invoice_discount'] = $request['invoice_discount'];
        $param['invoice_quantity'] = $request['invoice_quantity'];
        $param['invoice_revenue'] = invoiceRevenue($request, false);
        $param['invoice_profit'] = invoiceProfit($request, false);
        $param['invoice_updated_at'] = Carbon::now();

        DB::table($this->table)
        ->where('invoice_id', $request->invoice_id)
        ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
