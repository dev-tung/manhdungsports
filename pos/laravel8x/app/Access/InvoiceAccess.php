<?php

namespace App\Access;
use DB;
use Carbon\Carbon;

class InvoiceAccess extends Access{

    private $table = 'invoice';

    public function get(){
        $query = "
            SELECT * FROM productorder
            JOIN customer ON productorder.customer_id = customer.customer_id
            JOIN customergroup ON customergroup.customergroup_id = customer.customergroup_id
            JOIN product ON productorder.product_id = product.product_id
            JOIN productype ON productype.productype_id = product.productype_id
            ORDER BY productorder_created_at DESC
        ";
        return DB::select($query);
    }


}
