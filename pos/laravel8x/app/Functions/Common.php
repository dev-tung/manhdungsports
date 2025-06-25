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
    return $colorList[$key];
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
    return $colorTypes[$key];
  }
}


if( !function_exists('commomGetStringProfit') ){
  function commomGetStringProfit($string_price_input, $string_price_out, $string_type = 1){
     $oneStringPriceInput =  $string_type != 1 ? $string_price_input : $string_price_input/22;
     return number_format($string_price_out - $oneStringPriceInput);
  }
}