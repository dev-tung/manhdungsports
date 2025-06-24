<?php

namespace App\Access;
use DB;

class StringorderAccess extends Access{

    private $table = 'string';

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
            'string_name' => $params['string_name'],
            'string_parent_id' => $params['string_parent_id']
        ]);
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
