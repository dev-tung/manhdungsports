<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

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
			JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN string ON stringorder.string_id = string.string_id
            ORDER BY stringorder.created_at DESC
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
        $param['stringorder_status'] = $request['stringorder_status'];
        $param['stringorder_timereturn'] = $request['stringorder_timereturn'];
        $param['stringorder_ispayment'] = $request['stringorder_ispayment'];
        $param['stringorder_discount'] = $request['stringorder_discount'];
        $param['stringorder_gen'] = $request['stringorder_gen'];
        $param['stringorder_welding'] = $request['stringorder_welding'];
        $param['created_at'] = Carbon::now();
        $param['updated_at'] = Carbon::now();
        DB::table($this->table)->insert( $param );
    }

    public function update($request){
        $param['customer_id'] = $request['customer_id'];
        $param['stringorder_description'] = $request['stringorder_description'];
        $param['string_id'] = $request['string_id'];
        $param['stringorder_kg'] = $request['stringorder_kg'];
        $param['stringorder_status'] = $request['stringorder_status'];
        $param['stringorder_timereturn'] = $request['stringorder_timereturn'];
        $param['stringorder_ispayment'] = $request['stringorder_ispayment'];
        $param['stringorder_discount'] = $request['stringorder_discount'];
        $param['stringorder_gen'] = $request['stringorder_gen'];
        $param['stringorder_welding'] = $request['stringorder_welding'];
        $param['updated_at'] = Carbon::now();

        DB::table($this->table)
        ->where('stringorder_id', $request->stringorder_id)
        ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
