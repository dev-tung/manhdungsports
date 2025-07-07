<?php
if( !function_exists('expenseType') ){
  function expenseType($key = null){
    $expenseType = [
      1 => 'Sản phẩm tặng kèm',
      2 => 'Nhập vợt',
      3 => 'Nhập giày',
      4 => 'Nhập phụ kiện'
    ];

    return array_key_exists($key, $expenseType) ? $expenseType[$key] : $expenseType;
  }
}