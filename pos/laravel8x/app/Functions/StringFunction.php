<?php

if( !function_exists('stringGetType') ){
  function stringGetType($key = null){
    $typeArray = [
      1 => 'Cuộn',
      2 => 'Vỉ'
    ];

    return array_key_exists($key, $typeArray) ? $typeArray[$key] : $typeArray;
  }
}

if( !function_exists('stringGetColor') ){
  function stringGetColor($key = null){
    $colorArray = [
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

    return array_key_exists($key, $colorArray) ? $colorArray[$key] : $colorArray;
  }
}

if( !function_exists('stringType') ){
  function stringType($stringorder){
    if( !empty( $stringorder ) ) {
      return "[".stringGetType($stringorder->string_type)."] ".$stringorder->string_name." - " . stringGetColor($stringorder->string_color);
    }
    
    dd('Data is empty');
  }
}

if( !function_exists('stringPriceInputEach') ){
  function stringPriceInputEach($string, $format = true){
    if( !empty( $string ) ){
      $price = $string->string_type != 1 ? $string->string_price_input : $string->string_price_input / 22;
      return $format ? commonNumberToVND( $price ) : $price ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('stringorderRevenue') ){
  function stringorderRevenue($stringorder, $format = true){
    if( !empty( $stringorder ) ){
      $revenue = $stringorder->string_price_output;
      
      if( !empty($stringorder->stringorder_gen) ){
        $revenue = $revenue + 80000;
      }

      if( !empty($stringorder->stringorder_welding) ){
        $revenue = $revenue + 150000;
      }

      if( !empty($stringorder->stringorder_discount) ){
        $revenue = $revenue - $stringorder->stringorder_discount;
      }

      return $format ? commonNumberToVND( $revenue ) : $revenue ;
    }

    dd('Data is empty');
  }
}

if( !function_exists('stringProfit') ){
  function stringProfit($string, $format = true){
    if( !empty( $string ) ){
      $profit = $string->string_price_output - stringPriceInputEach($string, false);
      return $format ? commonNumberToVND( $profit ) : $profit ;
    }
    dd('Data is empty');
  }
}


if( !function_exists('stringorderProfit') ){
  function stringorderProfit($stringorder, $format = true){
    if( !empty( $stringorder ) ){
      $profit = stringorderRevenue($stringorder, false) - stringPriceInputEach($stringorder, false);

      if( !empty($stringorder->stringorder_welding) ){
        $profit = $profit - 100000;
      }

      return $format ? commonNumberToVND( $profit ) : $profit ;
    }
    dd('Data is empty');
  }
}

if( !function_exists('stringorderStatus') ){
  function stringorderStatus($key = null){
    $optionArray = [
        0 => '<span class="Text_Danger">Đã nhận vợt</span>',
        1 => '<span class="Text_Danger">Đang căng cước</span>',
        2 => '<span class="Text_Danger">Đã căng cước</span>',
        3 => '<span>Đã trả khách</span>'
    ];

    return array_key_exists($key, $optionArray) ? $optionArray[$key] : $optionArray;
  }
}

if( !function_exists('stringDisplayName') ){
  function stringDisplayName($string){
    return '['.stringGetType($string->string_type).'] '.$string->string_name .'-'. stringGetColor($string->string_color);
  }
}




