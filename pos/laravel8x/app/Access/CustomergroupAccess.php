<?php

namespace App\Access;
use DB;

class CustomergroupAccess extends Access{

    private $table = 'customergroup';

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
            'customergroup_name' => $params['customergroup_name'],
            'customergroup_parent_id'   => $params['customergroup_parent_id']
        ]);
    }

    public function update($params){
        $update['customergroup_name'] = $params['customergroup_name'];
        $update['customergroup_parent_id'] = $params['customergroup_parent_id'];

        DB::table($this->table)
            ->where('customergroup_id', $params->customergroup_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
