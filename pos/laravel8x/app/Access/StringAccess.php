<?php

namespace App\Access;
use DB;

class ProductAccess extends Access{

    private $table = 'product';

    public function get( $searchParams = null ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->get();
    }

    public function priceTotalInput(){
        $price = DB::select('SELECT SUM(product_price_input * product_quantity) as product_price_input_total FROM product ');
        return !empty( $price[0]->product_price_input_total ) ? $price[0]->product_price_input_total : 0;
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
            'product_name' => $params['product_name'],
            'product_price_input' => $params['product_price_input'],
            'product_price_output' => $params['product_price_output'],
            'product_description' => $params['product_description'],
            'product_quantity' => $params['product_quantity'],
            'product_thumbnail' => $params->newPath,
            'product_productype' => $params['product_productype'],
            'product_unit' => $params['product_unit'],
            'productype_id' => $params['productype_id']
        ]);
    }

    public function update($params){
        $update['product_name'] = $params['product_name'];
        $update['product_price_input'] = $params['product_price_input'];
        $update['product_price_output'] = $params['product_price_output'];
        $update['product_description'] = $params['product_description'];
        $update['product_quantity'] = $params['product_quantity'];
        $update['product_productype'] = $params['product_productype'];
        $update['product_unit'] = $params['product_unit'];
        $update['productype_id'] = $params['productype_id'];

        if( !empty( $params->newPath ) ){
            $update['product_thumbnail'] = $params->newPath;
        }

        DB::table($this->table)
            ->where('product_id', $params->product_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
