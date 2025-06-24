<?php

namespace App\Access;
use DB;

class StringtypeAccess extends Access{

    private $table = 'stringtype';

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
            'stringtype_name' => $params['stringtype_name'],
            'stringtype_parent_id'   => $params['stringtype_parent_id']
        ]);
    }

    public function update($params){
        $update['stringtype_name'] = $params['stringtype_name'];
        $update['stringtype_parent_id'] = $params['stringtype_parent_id'];

        DB::table($this->table)
            ->where('stringtype_id', $params->stringtype_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
