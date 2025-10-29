<?php

namespace App\Access;
use DB;

class CustomerAccess extends Access{

    private $table = 'customer';

    public function search($request){
        $searchParams = [];

        if( !empty($request->customer_name) ){
            $searchParams[] = ['customer.customer_name', 'like', '%' . $request->customer_name . '%'];
        }

        if( !empty($request->customergroup_id) ){
            $searchParams[] = ['customergroup.customergroup_id', 'like', '%' . $request->customergroup_id . '%'];
        }

        return $this->buildCondition($searchParams);
    }

    public function get( $request = null ){
        $WHERE = $this->search($request);
        $query = "
            SELECT * FROM `customer` customer 
            JOIN customergroup customergroup 
            ON customer.customergroup_id = customergroup.customergroup_id
            $WHERE
            ORDER BY customergroup.customergroup_name
        ";

        return DB::select($query);
    }

    public function first( $searchParams ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->first();
    }

    public function insert($request){
        $param['customer_name'] = $request['customer_name'];
        $param['customergroup_id'] = $request['customergroup_id'];
        $param['customer_name'] = $request['customer_name'];
        $param['customer_description'] = $request['customer_description'];
        $param['customer_address'] = $request['customer_address'];

        DB::table($this->table)->insert($param);
    }

    public function update($request){
        $param['customer_name'] = $request['customer_name'];
        $param['customergroup_id'] = $request['customergroup_id'];
        $param['customer_name'] = $request['customer_name'];
        $param['customer_description'] = $request['customer_description'];
        $param['customer_address'] = $request['customer_address'];

        if( !empty( $request->newPath ) ){
            $param['customer_thumbnail'] = $request->newPath;
        }

        DB::table($this->table)
            ->where('customer_id', $request->customer_id)
            ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
