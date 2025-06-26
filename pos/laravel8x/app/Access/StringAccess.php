<?php

namespace App\Access;
use DB;

class StringAccess extends Access{

    private $table = 'string';

    public function searchParam($request){
        $searchParams = [];

        if( !empty($request->string_name) ){
            $searchParams[] = ['string_name', 'like', '%' . $request->string_name . '%'];
        }

        return $searchParams;
    }

    public function get( $request ){
        $query = DB::table($this->table);
        $searchParams = $this->searchParam($request);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->orderBy('string_type')->orderBy('string_name')->get();
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

    public function insert($request){
        $param['string_name'] = $request['string_name'];
        $param['string_price_input'] = $request['string_price_input'];
        $param['string_price_output'] = $request['string_price_output'];
        $param['string_description'] = $request['string_description'];
        $param['string_type'] = $request['string_type'];
        $param['string_color'] = $request['string_color'];
        DB::table($this->table)->insert($param);
    }

    public function update($request){
        $param['string_name'] = $request['string_name'];
        $param['string_price_input'] = $request['string_price_input'];
        $param['string_price_output'] = $request['string_price_output'];
        $param['string_description'] = $request['string_description'];
        $param['string_type'] = $request['string_type'];
        $param['string_color'] = $request['string_color'];
        DB::table($this->table)
            ->where('string_id', $request->string_id)
            ->update($param);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
