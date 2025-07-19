<?php
if( !function_exists('expenseType') ){
  function expenseType($key = null){
    $expenseType = [
      1 => 'Sản phẩm tặng kèm',
      2 => 'Nhập vợt',
      3 => 'Nhập giày',
      4 => 'Nhập phụ kiện',
      5 => 'Tiền lương nhân viên',
      6 => 'Chi phí vận hành',
      7 => 'Lỗi cước',
      8 => 'Đánh cầu'
    ];

    return array_key_exists($key, $expenseType) ? $expenseType[$key] : $expenseType;
  }
}