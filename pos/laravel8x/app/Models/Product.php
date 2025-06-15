<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    public function add($params){
        return self::insert([
            'product_name'          => $params['product_name'],
            'product_price_input'   => $params['product_price_input'],
            'product_price_output'  => $params['product_price_output'],
            'product_description'   => $params['product_description'],
            'product_quantity'      => $params['product_quantity'],
            'product_thumbnail'     => $params['product_thumbnail'],
            'product_category'      => $params['product_category'],
            'product_unit'          => $params['product_unit']
        ]);
    }

    // public function update($params){
    //     dd($params);
    // }

    // public function delete($params){
    //     dd($params);
    // }
}
