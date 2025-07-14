<?php

if( !function_exists('invoiceStatus') ){
  function invoiceStatus($key = 'array'){
    $optionArray = [
        0 => '<span class="Text_Danger">Chờ đặt hàng</span>',
        1 => '<span class="Text_Danger">Đã sẵn giao</span>',
        2 => '<span>Đã giao hàng</span>',
        3 => '<span class="Text_Danger">Đang đặt hàng</span>',
        4 => '<span class="Text_Warning">Hủy đơn</span>',
        5 => '<span class="Text_Info">Tặng kèm</span>'
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
