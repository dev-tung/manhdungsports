<?php

if( !function_exists('productorderStatus') ){
  function productorderStatus($key = null){
    $optionArray = [
        0 => '<span class="Text_Danger">Đang đặt hàng</span>',
        1 => '<span class="Text_Danger">Đã sẵn giao</span>',
        2 => '<span>Đã giao hàng</span>'
    ];

    return array_key_exists($key, $optionArray) ? $optionArray[$key] : $optionArray;
  }
}


if( !function_exists('productorderRevenue') ){
  function productorderRevenue($productorder, $format = true){
    
    if( !empty( $productorder ) ){
      $revenue = $productorder->product_price_output;

      if( !empty($productorder->productorder_discount) ){
        $revenue = $revenue - $productorder->productorder_discount;
      }

      return $format ? commonNumberToVND( $revenue ) : $revenue ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('productorderProfit') ){
  function productorderProfit($productorder, $format = true){
    if( !empty( $productorder ) ){
      $revenue = $productorder->product_price_output - $productorder->product_price_input;

      if( !empty($productorder->productorder_discount) ){
        $revenue = $revenue - $productorder->productorder_discount;
      }

      return $format ? commonNumberToVND( $revenue ) : $revenue ;
    }

    dd('Data is empty');
  }
}



