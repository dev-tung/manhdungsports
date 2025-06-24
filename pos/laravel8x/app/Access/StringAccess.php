<?php

namespace App\Access;
use DB;

class StringAccess extends Access{

    private $table = 'string';

    public function get( $searchParams = null ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->get();
    }

    public function priceTotalInput(){
        $price = DB::select('SELECT SUM(string_price_input * string_quantity) as string_price_input_total FROM string ');
        return !empty( $price[0]->string_price_input_total ) ? $price[0]->string_price_input_total : 0;
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
            'string_price_input' => $params['string_price_input'],
            'string_price_output' => $params['string_price_output'],
            'string_description' => $params['string_description'],
            'string_quantity' => $params['string_quantity'],
            'string_thumbnail' => $params->newPath,
            'string_stringype' => $params['string_stringype'],
            'string_unit' => $params['string_unit'],
            'stringype_id' => $params['stringype_id']
        ]);
    }

    public function update($params){
        $update['string_name'] = $params['string_name'];
        $update['string_price_input'] = $params['string_price_input'];
        $update['string_price_output'] = $params['string_price_output'];
        $update['string_description'] = $params['string_description'];
        $update['string_quantity'] = $params['string_quantity'];
        $update['string_stringype'] = $params['string_stringype'];
        $update['string_unit'] = $params['string_unit'];
        $update['stringype_id'] = $params['stringype_id'];

        if( !empty( $params->newPath ) ){
            $update['string_thumbnail'] = $params->newPath;
        }

        DB::table($this->table)
            ->where('string_id', $params->string_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
