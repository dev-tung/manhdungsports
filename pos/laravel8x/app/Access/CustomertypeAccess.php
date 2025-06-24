<?php

namespace App\Access;
use DB;

class CustomertypeAccess extends Access{

    private $table = 'customertype';

    public function get( $searchParams = null ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
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
            'customertype_name' => $params['customertype_name'],
            'customertype_parent_id'   => $params['customertype_parent_id']
        ]);
    }

    public function update($params){
        $update['customertype_name'] = $params['customertype_name'];
        $update['customertype_parent_id'] = $params['customertype_parent_id'];

        DB::table($this->table)
            ->where('customertype_id', $params->customertype_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
