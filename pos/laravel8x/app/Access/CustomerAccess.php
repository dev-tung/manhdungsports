<?php

namespace App\Access;
use DB;

class CustomerAccess extends Access{

    private $table = 'customer';

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
            'customer_name' => $params['customer_name'],
            'customer_price_input' => $params['customer_price_input'],
            'customer_price_output' => $params['customer_price_output'],
            'customer_description' => $params['customer_description'],
            'customer_quantity' => $params['customer_quantity'],
            'customer_thumbnail' => $params->newPath,
            'customer_customerype' => $params['customer_customerype'],
            'customer_unit' => $params['customer_unit'],
            'customerype_id' => $params['customerype_id']
        ]);
    }

    public function update($params){
        $update['customer_name'] = $params['customer_name'];
        $update['customer_price_input'] = $params['customer_price_input'];
        $update['customer_price_output'] = $params['customer_price_output'];
        $update['customer_description'] = $params['customer_description'];
        $update['customer_quantity'] = $params['customer_quantity'];
        $update['customer_customerype'] = $params['customer_customerype'];
        $update['customer_unit'] = $params['customer_unit'];
        $update['customerype_id'] = $params['customerype_id'];

        if( !empty( $params->newPath ) ){
            $update['customer_thumbnail'] = $params->newPath;
        }

        DB::table($this->table)
            ->where('customer_id', $params->customer_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
