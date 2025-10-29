<?php

namespace App\Access;
use DB;

class ProductypeAccess extends Access{

    private $table = 'productype';

    public function search($request){
        $searchParams = [];

        if( !empty($request->productype_name) ){
            $searchParams[] = ['productype_name', 'like', '%' . $request->productype_name . '%'];
        }

        return $this->buildCondition($searchParams);
    }

    public function get( $request = null ){
        $query = DB::table($this->table);

        if( !empty($request) ){
            $searchParams = $this->search($request);

            if( !empty( $searchParams ) ){
                $query->where($searchParams);
            }
        }

        return $query->get();
    }

    public function first( $searchParams ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->first();
    }

    public function insert($request){
        $param['productype_name'] = $request['productype_name'];
        $param['productype_parent_id'] = $request['productype_parent_id'];
        $param['productype_code'] = $request['productype_code'];

        DB::table($this->table)->insert($param);
    }

    public function update($request){
        $param['productype_name'] = $request['productype_name'];
        $param['productype_parent_id'] = $request['productype_parent_id'];
        $param['productype_code'] = $request['productype_code'];

        DB::table($this->table)
            ->where('productype_id', $request->productype_id)
            ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
