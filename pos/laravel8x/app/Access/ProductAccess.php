<?php

namespace App\Access;
use DB;

class ProductAccess extends Access{

    private $table = 'product';

    public function searchParam($request){
        $searchParams = [];

        if( !empty($request->product_name) ){
            $searchParams[] = ['product_name', 'like', '%' . $request->product_name . '%'];
        }

        if( !empty($request->productype_id) ){
            $searchParams[] = ['productype.productype_id', 'like', '%' . $request->productype_id . '%'];
        }

        return $searchParams;
    }

    public function get( $request){
        $searchParam = $this->searchParam($request);
        $WHERE = $this->conditionBuilder($searchParam);
        $query = "
            SELECT * FROM product
            JOIN productype ON product.productype_id = productype.productype_id
            $WHERE
            ORDER BY productype.productype_name
        ";
        return DB::select($query);
    }

    public function selling(){
        $query = "
            SELECT * FROM product
            WHERE product_quantity > 0
        ";
        return DB::select($query);
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

    public function insert($request){
        $param['product_name'] = $request['product_name'];
        $param['product_price_input'] = $request['product_price_input'];
        $param['product_price_output'] = $request['product_price_output'];
        $param['product_description'] = $request['product_description'];
        $param['product_quantity'] = $request['product_quantity'];
        $param['product_unit'] = $request['product_unit'];
        $param['product_gender'] = $request['product_gender'];
        $param['product_color'] = $request['product_color'];
        $param['product_size'] = $request['product_size'];
        $param['product_source'] = $request['product_source'];
        $param['productype_id'] = $request['productype_id'];

        DB::table($this->table)->insert($param);
    }

    public function update($request){
        $param['product_name'] = $request['product_name'];
        $param['product_price_input'] = $request['product_price_input'];
        $param['product_price_output'] = $request['product_price_output'];
        $param['product_description'] = $request['product_description'];
        $param['product_quantity'] = $request['product_quantity'];
        $param['product_unit'] = $request['product_unit'];
        $param['product_gender'] = $request['product_gender'];
        $param['product_color'] = $request['product_color'];
        $param['product_size'] = $request['product_size'];
        $param['product_source'] = $request['product_source'];
        $param['productype_id'] = $request['productype_id'];
        

        if( !empty( $request->newPath ) ){
            $param['product_thumbnail'] = $params->newPath;
        }

        DB::table($this->table)
            ->where('product_id', $request->product_id)
            ->update($param);
    }

    public function updateQuantity($product_quantity, $product_id){
        $update['product_quantity'] = $product_quantity;
        DB::table($this->table)
            ->where('product_id', $product_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

    public function stringPriceTable(){
        $query = "
            SELECT 
                product_name
                , product_price_input
                , product_price_output
                , productype_name 
            FROM product 
            JOIN productype ON product.productype_id = productype.productype_id
            WHERE product.productype_id IN (35, 36)
            ORDER BY product.productype_id
        ";
        return DB::select($query);
    }

}
