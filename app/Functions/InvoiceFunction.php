<?php

if( !function_exists('invoiceStatus') ){
  function invoiceStatus($key = 'array'){
    $optionArray = [
        0 => 'Chờ đặt hàng',
        1 => 'Đã sẵn giao',
        2 => 'Đã giao hàng',
        3 => 'Đang đặt hàng',
        4 => 'Hủy đơn',
        5 => 'Tặng kèm'
    ];

    if( $key !== 'array' ) return array_key_exists($key, $optionArray) ? $optionArray[$key] : $optionArray[0];
    return $optionArray;
  }
}


if( !function_exists('invoiceRevenue') ){
  function invoiceRevenue($request, $product, $format = true){
    if( !empty( $request ) ){
      $revenue = $product->product_price_output * $request->invoice_quantity;

      if( !empty($request->invoice_discount) ){
        $revenue = $revenue - $request->invoice_discount;
      }

      return $format ? commonNumberToVND( $revenue ) : $revenue ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('invoiceProfit') ){
  function invoiceProfit($request, $product, $format = true){
    if( !empty( $request ) ){
      $profit = ($product->product_price_output - $product->product_price_input ) * $request->invoice_quantity;

      if( !empty($request->invoice_discount) ){
        $profit = $profit - $request->invoice_discount;
      }

      if( $request->invoice_status == 5 ){
        $profit = - ($product->product_price_input * $request->invoice_quantity );
      }

      return $format ? commonNumberToVND( $profit ) : $profit ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('invoiceDiscount') ){
  function invoiceDiscount($request, $product, $format = true){
    if( !empty( $request ) && $request->invoice_status == 5){
      $request->invoice_discount = invoiceRevenue($request, $product, false);
    }
    return $format ? commonNumberToVND( $request->invoice_discount ) : $request->invoice_discount;
  }
}
