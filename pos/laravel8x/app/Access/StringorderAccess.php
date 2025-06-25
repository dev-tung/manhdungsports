<?php

namespace App\Access;
use DB;

class StringorderAccess extends Access{

    private $table = 'stringorder';

    public function searchParam($request){
       if( empty($request->stringorder_name) ) return '';
        $searchParams[] = ['stringorder_name', 'like', '%' . $request->stringorder_name . '%'];
        return $searchParams;
    }

    public function get( $request){
        $query = "
            SELECT * FROM stringorder
            JOIN customer ON stringorder.customer_id = customer.customer_id
            JOIN string ON stringorder.string_id = string.string_id
        ";
        return DB::select($query);
    }

    public function getCustomers(){
        $query = "
            SELECT customer_id, CONCAT(customer_name, ' - ' ,customergroup_name) as customer_name FROM `customer` customer 
            JOIN customergroup customergroup 
            ON customer.customergroup_id = customergroup.customergroup_id
            ORDER BY customergroup.customergroup_name
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
        $param['stringorder_description'] = $request['stringorder_description'];
        $param['string_id'] = $request['string_id'];
        $param['stringorder_kg'] = $request['stringorder_kg'];
        $param['stringorder_revenue'] = $request['stringorder_revenue'] - $request['stringorder_discount'];
        $param['stringorder_status'] = $request['stringorder_status'];
        $param['stringorder_timereturn'] = $request['stringorder_timereturn'];
        $param['stringorder_ispayment'] = $request['stringorder_ispayment'];
        $param['stringorder_discount'] = $request['stringorder_discount'];
        DB::table($this->table)->insert( $param );
    }

    public function update($params){
        $update['string_name'] = $params['string_name'];
        $update['string_parent_id'] = $params['string_parent_id'];

        DB::table($this->table)
        ->where('string_id', $params->string_id)
        ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
