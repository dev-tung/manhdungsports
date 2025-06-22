<?php

namespace App\Dbaccess;
use DB;

class Product extends Dbaccess{

    private $table = 'products';

    public function get( $searchParams ){
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
            'product_name'          => $params['product_name'],
            'product_price_input'   => $params['product_price_input'],
            'product_price_output'  => $params['product_price_output'],
            'product_description'   => $params['product_description'],
            'product_quantity'      => $params['product_quantity'],
            'product_thumbnail'     => asset($params->newPath),
            'product_category'      => $params['product_category'],
            'product_unit'          => $params['product_unit']
        ]);
    }

    public function update($params){
        DB::table($this->table)->where('product_id', $params->product_id)->update([
            'product_name'          => $params['product_name'],
            'product_price_input'   => $params['product_price_input'],
            'product_price_output'  => $params['product_price_output'],
            'product_description'   => $params['product_description'],
            'product_quantity'      => $params['product_quantity'],
            'product_thumbnail'     => asset($params->newPath),
            'product_category'      => $params['product_category'],
            'product_unit'          => $params['product_unit']
        ]);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
