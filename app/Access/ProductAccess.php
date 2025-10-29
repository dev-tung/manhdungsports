<?php

namespace App\Access;
use DB;

class ProductAccess extends Access{

    private $table = 'product';

    public function search($request){
        $searchParams = [];

        if( !empty($request->product_name) ){
            $searchParams[] = ['product_name', 'like', '%' . $request->product_name . '%'];
        }

        if( !empty($request->product_size) ){
            $searchParams[] = ['product_size', 'like', '%' . $request->product_size . '%'];
        }

        if( !empty($request->product_color) ){
            $searchParams[] = ['product_color', 'like', '%' . $request->product_color . '%'];
        }

        if( !empty($request->productype_id) ){
            $searchParams[] = ['product.productype_id', 'like', '%' . $request->productype_id . '%'];
        }

        if( !empty($request->productype_code) ){
            $searchParams[] = ['productype.productype_code', '=', $request->productype_code];
        }

        return $this->buildCondition($searchParams);
    }

    public function get( $request){
        $WHERE = $this->search($request);
        $query = "
            SELECT * FROM product
            JOIN productype ON product.productype_id = productype.productype_id
            $WHERE
            ORDER BY productype.productype_name
        ";
        return DB::select($query);
    }

    public function homepage(){
        $query = "
            SELECT * FROM product
            JOIN productype ON product.productype_id = productype.productype_id
            WHERE productype_code != '' AND productype_sort > 0
            AND product_quantity > 0
            ORDER BY productype_sort ASC
        ";
        return DB::select($query);
    }

    public function selling(){
        $query = "
            SELECT * FROM product
            JOIN productype ON product.productype_id = productype.productype_id
            WHERE product_quantity > 0
        ";
        return DB::select($query);
    }

    public function priceTotalInput($request){
        $WHERE = $this->search($request);
        $query = "
            SELECT SUM(product_price_input * product_quantity) as product_price_input_total 
            FROM product
            $WHERE
        ";
        $price = DB::select($query);
        return !empty( $price[0]->product_price_input_total ) ? $price[0]->product_price_input_total : 0;
    }

    public function priceTotalInputNoDrop(){
        $query = "
            SELECT SUM(product_price_input * product_quantity) as product_price_input_total 
            FROM product
            WHERE product_isdrop = 0
        ";
        $price = DB::select($query);
        return !empty( $price[0]->product_price_input_total ) ? $price[0]->product_price_input_total : 0;
    }

    public function priceTotalOutput($request){
        $WHERE = $this->search($request);
        $query = "
            SELECT SUM(product_price_output * product_quantity) as product_price_output_total 
            FROM product
            $WHERE
        ";
        $price = DB::select($query);
        return !empty( $price[0]->product_price_output_total ) ? $price[0]->product_price_output_total : 0;
    }

    public function first( $searchParams ){
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
        $param['product_isdrop'] = $request['product_isdrop'];

        if( !empty( $request->newPath ) ){
            $param['product_thumbnail'] = $request->newPath;
        }

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
        $param['product_isdrop'] = $request['product_isdrop'];
        
        if( !empty( $request->newPath ) ){
            $param['product_thumbnail'] = $request->newPath;
        }

        DB::table($this->table)
            ->where('product_id', $request->product_id)
            ->update($param);
    }

    public function updateQuantity($request, $product){
        if( !isset( $request->invoice_id ) ){
            $update['product_quantity'] = $product->product_quantity - $request->invoice_quantity;
            DB::table($this->table)
                ->where('product_id', $product->product_id)
                ->update($update);
            return true;
        }

        if( $request->invoice_id && $request->invoice_status == 4 ){
            $update['product_quantity'] = $product->product_quantity + $request->invoice_quantity;
            DB::table($this->table)
                ->where('product_id', $product->product_id)
                ->update($update);
            return true;
        }
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

    public function stringTable(){
        $query = "
            SELECT 
                product_name
                , product_price_input
                , product_price_output
                , productype_name 
                , product_color
            FROM product 
            JOIN productype ON product.productype_id = productype.productype_id
            WHERE product.productype_id IN (35, 36) AND product_quantity > 0
            ORDER BY product.productype_id, product.product_price_output
        ";
        return DB::select($query);
    }

}
