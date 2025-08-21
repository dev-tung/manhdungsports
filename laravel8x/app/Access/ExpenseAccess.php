<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

class ExpenseAccess extends Access{

    private $table = 'expense';

    public function search($request){
        $searchParams = [];

        if( !empty($request->expense_name) ){
            $searchParams[] = ['expense_name', 'like', '%' . $request->expense_name . '%'];
        }

        if( !empty($request->expensetype_id) ){
            $searchParams[] = ['expensetype_id', 'like', '%' . $request->expensetype_id . '%'];
        }

        if( !empty($request->expense_created_at_from) ){
            $searchParams[] = ['expense_created_at', '>=', $request->expense_created_at_from . ' 00:00:00'];
        }

        if( !empty($request->expense_created_at_to) ){
            $searchParams[] = ['expense_created_at', '<=', $request->expense_created_at_to .' 12:00:00'];
        }

        return $this->buildCondition($searchParams);
    }

    public function todayMoney(){
        $query = "
            SELECT 
                 expense_money
            FROM expense 
            WHERE DATE(expense_created_at) = CURDATE()
        ";
        return DB::select($query);
    }

    public function thismonthMoney(){
        $query = "
            SELECT 
                 expense_money
            FROM expense 
            WHERE MONTH(expense_created_at) = MONTH(CURRENT_DATE())
        ";
        return DB::select($query);
    }

    public function get( $request = null ){
        $WHERE = $this->search($request);
        $query = "
            SELECT 
                 *
            FROM expense 
            $WHERE
            ORDER BY expense_created_at DESC
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
        $param['expense_name'] = $request['expense_name'];
        $param['expense_description'] = $request['expense_description'];
        $param['expensetype_id'] = $request['expensetype_id'];
        $param['expense_money'] = $request['expense_money'];
        $param['expense_ispayment'] = $request['expense_ispayment'];
        $param['expense_created_at'] = $request['expense_created_at'];
        $param['expense_updated_at'] = Carbon::now();

        DB::table($this->table)->insert($param);
    }

    public function update($request){
        $param['expense_name'] = $request['expense_name'];
        $param['expense_description'] = $request['expense_description'];
        $param['expensetype_id'] = $request['expensetype_id'];
        $param['expense_money'] = $request['expense_money'];
        $param['expense_ispayment'] = $request['expense_ispayment'];
        $param['expense_created_at'] = $request['expense_created_at'];
        $param['expense_updated_at'] = Carbon::now();

        DB::table($this->table)
            ->where('expense_id', $request->expense_id)
            ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
