<?php

namespace App\Access;
use DB;

class ExpenseAccess extends Access{

    private $table = 'expense';

    public function searchParam($request){
        $searchParams = [];

        if( !empty($request->expense_description) ){
            $searchParams[] = ['expense_description', 'like', '%' . $request->expense_description . '%'];
        }

        return $searchParams;
    }

    public function get( $request = null ){
        $query = DB::table($this->table);

        if( !empty($request) ){
            $searchParams = $this->searchParam($request);

            if( !empty( $searchParams ) ){
                $query->where($searchParams);
            }
        }

        return $query->get();
    }

    public function getFirst( $searchParams ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->first();
    }

    public function insert($params){
        DB::table($this->table)->insert([
            'expense_description' => $params['expense_description'],
            'expensetype_id' => $params['expensetype_id'],
            'expense_money' => $params['expense_money'],
            'expense_ispayment' => $params['expense_ispayment'],
        ]);

        
    }

    public function update($params){
        $update['expense_description'] = $params['expense_description'];
        $update['expense_parent_id'] = $params['expense_parent_id'];

        DB::table($this->table)
            ->where('expense_id', $params->expense_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
