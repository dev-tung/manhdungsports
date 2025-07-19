<?php

if( !function_exists('commonNumberToVND') ){
  function commonNumberToVND( $number ){
    return number_format( $number ) . ' đ';
  }
}


if( !function_exists('commomIspayment') ){
  function commomIspayment($key = null){
    $paymentArray = [
        0 => '<span class="Text_Danger">Chưa thanh toán</span>',
        1 => '<span>Đã thanh toán</span>'
    ];

    return array_key_exists($key, $paymentArray) ? $paymentArray[$key] : $paymentArray;
  }
}

if( !function_exists('commomYesNoOption') ){
  function commomYesNoOption($key = null){
    $options = [
      0 => 'Không',
      1 => 'Có'
    ];

    return array_key_exists($key, $options) ? $options[$key] : $options;
  }
}