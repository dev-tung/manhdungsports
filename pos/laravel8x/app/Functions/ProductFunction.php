<?php

if( !function_exists('invoiceStatus') ){
  function invoiceStatus($key = null){
    $optionArray = [
        0 => '<span class="Text_Danger">Chờ đặt hàng</span>',
        1 => '<span class="Text_Danger">Đã sẵn giao</span>',
        2 => '<span>Đã giao hàng</span>',
        3 => '<span class="Text_Danger">Đang đặt hàng</span>'
    ];

    return array_key_exists($key, $optionArray) ? $optionArray[$key] : $optionArray;
  }
}


if( !function_exists('invoiceRevenue') ){
  function invoiceRevenue($invoice, $format = true){
    
    if( !empty( $invoice ) ){
      $revenue = $invoice->product_price_output * $invoice->invoice_quantity;

      if( !empty($invoice->invoice_discount) ){
        $revenue = $revenue - $invoice->invoice_discount;
      }

      return $format ? commonNumberToVND( $revenue ) : $revenue ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('invoiceProfit') ){
  function invoiceProfit($invoice, $format = true){
    if( !empty( $invoice ) ){
      $profit = ($invoice->product_price_output - $invoice->product_price_input ) * $invoice->invoice_quantity;

      if( !empty($invoice->invoice_discount) ){
        $profit = $profit - $invoice->invoice_discount;
      }

      return $format ? commonNumberToVND( $profit ) : $profit ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('productProfit') ){
  function productProfit($product, $format = true){
    if( !empty( $product ) ){
      $profit = ($product->product_price_output - $product->product_price_input ) * $product->product_quantity;

      return $format ? commonNumberToVND( $profit ) : $profit ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('stringDisplayName') ){
  function stringDisplayName($string){
    return $string->productype_name .' '. $string->product_name;
  }
}