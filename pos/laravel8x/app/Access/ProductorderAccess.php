<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

class ProductorderAccess extends Access{

    private $table = 'productorder';

    public function searchParam($request){
        $searchParams = [];

        if( !empty($request->productorder_name) ) {
            $searchParams[] = ["CONCAT_WS(customer_name, ' ', customergroup_name, ' ', product_name)", 'like', '%' . $request->productorder_name . '%'];
        }

        if( !empty($request->productype_id) ){
            $searchParams[] = ['productype.productype_id', 'like', '%' . $request->productype_id . '%'];
        }

        if( isset($request->productorder_ispayment) && $request->productorder_ispayment != ''){
            $searchParams[] = ['productorder_ispayment', '=', $request->productorder_ispayment];
        }
        
        if( !empty($request->productorder_created_at_from) ){
            $searchParams[] = ['productorder_created_at', '>=', $request->productorder_created_at_from . ' 00:00:00'];
        }

        if( !empty($request->productorder_created_at_to) ){
            $searchParams[] = ['productorder_created_at', '<=', $request->productorder_created_at_to .' 12:00:00'];
        }

        return $searchParams;
    }

    public function get( $request){
        $searchParam = $this->searchParam($request);
        $WHERE = $this->conditionBuilder($searchParam);
        $query = "
            SELECT * FROM productorder
            JOIN customer ON productorder.customer_id = customer.customer_id
            JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN product ON productorder.product_id = product.product_id
            JOIN productype ON productype.productype_id = product.productype_id
            $WHERE
            ORDER BY productorder_created_at DESC
        ";
        return DB::select($query);
    }

    public function todayMoney(){
        $query = "
            SELECT 
                 productorder_profit
                ,productorder_revenue 
            FROM productorder 
            JOIN customer ON productorder.customer_id = customer.customer_id
            JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN product ON productorder.product_id = product.product_id
            JOIN productype ON productype.productype_id = product.productype_id
            WHERE DATE(productorder_created_at) = CURDATE()
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
        $param['productorder_description'] = $request['productorder_description'];
        $param['product_id'] = $request['product_id'];
        $param['productorder_status'] = $request['productorder_status'];
        $param['productorder_timereturn'] = $request['productorder_timereturn'];
        $param['productorder_ispayment'] = $request['productorder_ispayment'];
        $param['productorder_discount'] = $request['productorder_discount'];
        $param['productorder_quantity'] = $request['productorder_quantity'];
        $param['productorder_revenue'] = productorderRevenue($request, false);
        $param['productorder_profit'] = productorderProfit($request, false);
        $param['productorder_created_at'] = Carbon::now();
        $param['productorder_updated_at'] = Carbon::now();
        DB::table($this->table)->insert( $param );
    }

    public function update($request){
        $param['customer_id'] = $request['customer_id'];
        $param['productorder_description'] = $request['productorder_description'];
        $param['product_id'] = $request['product_id'];
        $param['productorder_status'] = $request['productorder_status'];
        $param['productorder_timereturn'] = $request['productorder_timereturn'];
        $param['productorder_ispayment'] = $request['productorder_ispayment'];
        $param['productorder_discount'] = $request['productorder_discount'];
        $param['productorder_quantity'] = $request['productorder_quantity'];
        $param['productorder_revenue'] = productorderRevenue($request, false);
        $param['productorder_profit'] = productorderProfit($request, false);
        $param['productorder_updated_at'] = Carbon::now();

        DB::table($this->table)
        ->where('productorder_id', $request->productorder_id)
        ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
