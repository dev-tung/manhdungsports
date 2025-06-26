<?php

if( !function_exists('commomGetColorList') ){
  function commomGetColorList(){
    return [
      0 => 'Trộn',
      1 => 'Trắng',
      2 => 'Đen',
      3 => 'Đỏ',
      4 => 'Xanh chuối',
      5 => 'Xanh ngọc',
      6 => 'Xanh lá',
      6 => 'Xanh nước biển',
      7 => 'Hồng',
      9 => 'Vằn xanh xám'
    ];
  }
}

if( !function_exists('commomColor') ){
  function commomGetColorName($key){
    $colorList = commomGetColorList();
    if(array_key_exists($key, $colorList)) return $colorList[$key];
  }
}

if( !function_exists('commomGetStringTypeList') ){
  function commomGetStringTypeList(){
    return [
      1 => 'Cuộn',
      2 => 'Vỉ'
    ];
  }
}

if( !function_exists('commomGetStringTypeName') ){
  function commomGetStringTypeName($key){
    $colorTypes = commomGetStringTypeList();
    if(array_key_exists($key, $colorTypes)) return $colorTypes[$key];
  }
}


if( !function_exists('commomGetStringProfit') ){
  function commomGetStringProfit($string_price_input, $string_price_out, $string_type = 1){
     $oneStringPriceInput =  $string_type != 1 ? $string_price_input : $string_price_input/22;
     return number_format($string_price_out - $oneStringPriceInput);
  }
}

if( !function_exists('commomGetOrderstringStatus') ){
  function commomGetOrderstringStatus($key = null){
    $orderstringStatus = [
        0 => 'Đã nhận vợt',
        1 => 'Đã căng cước',
        2 => 'Đã trả khách'
    ];

    return $key !== null ? $orderstringStatus[$key] : $orderstringStatus;
  }
}

if( !function_exists('commomGetOrderstringIspayment') ){
  function commomGetOrderstringIspayment($key = null){
    $orderstringIspayment = [
        0 => '<span class="Text_Danger">Chưa thanh toán<span>',
        1 => '<span class="Text_Success">Đã thanh toán<span>'
    ];

    return $key !== null ? $orderstringIspayment[$key] : $orderstringIspayment;
  }
}
