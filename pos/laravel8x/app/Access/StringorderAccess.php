<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

class StringorderAccess extends Access{

    private $table = 'stringorder';

    public function searchParam($request){
        $searchParams = [];

        if( !empty($request->stringorder_name) ){
            $searchParams[] = ["CONCAT_WS(customer_name, ' ', customergroup_name)", 'like', '%' . $request->stringorder_name . '%'];
        }

        if( isset($request->stringorder_ispayment) && $request->stringorder_ispayment != ''){
            $searchParams[] = ['stringorder_ispayment', '=', $request->stringorder_ispayment];
        }

        if( !empty($request->stringorder_created_at_from) ){
            $searchParams[] = ['stringorder_created_at', '>=', $request->stringorder_created_at_from . ' 00:00:00'];
        }

        if( !empty($request->stringorder_created_at_to) ){
            $searchParams[] = ['stringorder_created_at', '<=', $request->stringorder_created_at_to .' 12:00:00'];
        }

        return $searchParams;
    }

    public function get( $request){
        $searchParam = $this->searchParam($request);
        $WHERE = $this->conditionBuilder($searchParam);

        $query = "
            SELECT * FROM stringorder
            JOIN customer ON stringorder.customer_id = customer.customer_id
			JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN string ON stringorder.string_id = string.string_id
            $WHERE
            ORDER BY stringorder_created_at DESC
        ";
        return DB::select($query);
    }

    public function todayMoney(){
        $query = "
            SELECT 
                 stringorder_profit
                ,stringorder_revenue 
            FROM stringorder 
            WHERE DATE(stringorder_created_at) = CURDATE()
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
        $param['stringorder_is_welding'] = $request['stringorder_is_welding'];
        $param['stringorder_revenue'] = stringorderRevenue($request, false);
        $param['stringorder_profit'] = stringorderProfit($request, false);
        $param['stringorder_created_at'] = Carbon::now();
        $param['stringorder_updated_at'] = Carbon::now();
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
        $param['stringorder_is_welding'] = $request['stringorder_is_welding'];
        $param['stringorder_revenue'] = stringorderRevenue($request, false);
        $param['stringorder_profit'] = stringorderProfit($request, false);
        $param['stringorder_updated_at'] = Carbon::now();

        DB::table($this->table)
        ->where('stringorder_id', $request->stringorder_id)
        ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
