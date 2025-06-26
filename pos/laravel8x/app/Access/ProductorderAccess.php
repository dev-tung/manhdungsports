<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

class ProductorderAccess extends Access{

    private $table = 'productorder';

    public function searchParam($request){
       if( empty($request->productorder_name) ) return '';
        $searchParams[] = ['productorder_name', 'like', '%' . $request->productorder_name . '%'];
        return $searchParams;
    }

    public function get( $request){
        $query = "
            SELECT *, productorder.created_at as ordertime FROM productorder
            JOIN customer ON productorder.customer_id = customer.customer_id
            JOIN product ON productorder.product_id = product.product_id
            ORDER BY ordertime DESC
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
        $param['created_at'] = Carbon::now();
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
        $param['updated_at'] = Carbon::now();

        DB::table($this->table)
        ->where('productorder_id', $request->productorder_id)
        ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
