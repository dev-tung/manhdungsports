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

    public function getFirst( $searchParams ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->first();
    }

    public function insert($params){
        DB::table($this->table)->insert([
            'productype_name' => $params['productype_name'],
            'productype_parent_id'   => $params['productype_parent_id']
        ]);
    }

    public function update($params){
        $update['productype_name'] = $params['productype_name'];
        $update['productype_parent_id'] = $params['productype_parent_id'];

        DB::table($this->table)
            ->where('productype_id', $params->productype_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
