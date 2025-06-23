<?php

namespace App\Dbaccess;
use DB;

class Category extends Dbaccess{

    private $table = 'categories';

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
            'category_name' => $params['category_name'],
            'category_parent_id'   => $params['category_parent_id']
        ]);
    }

    public function update($params){
        $update['category_name'] = $params['category_name'];
        $update['category_parent_id'] = $params['category_parent_id'];

        DB::table($this->table)
            ->where('category_id', $params->category_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
