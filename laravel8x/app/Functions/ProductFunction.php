<?php

if( !function_exists('productColor') ){
  function productColor($key = 'array'){
    
    $colorArray = [
      0 => 'Trộn màu',
      1 => 'Trắng',
      2 => 'Đen',
      3 => 'Đỏ',
      4 => 'Xanh chuối',
      5 => 'Xanh ngọc',
      6 => 'Xanh lá',
      6 => 'Xanh nước biển',
      7 => 'Hồng',
      9 => 'Vằn xanh xám',
      10 => 'Tím',
      11 => 'Xám',
      12 => 'Xanh than',
      13 => 'Màu da',
      14 => 'Cam'
    ];

    if( $key !== 'array' ) return array_key_exists($key, $colorArray) ? $colorArray[$key] : $colorArray[0];
    return $colorArray;
  }
}

if( !function_exists('productSize') ){
  function productSize($key = 'array'){
    $sizeArray = [
      0 => 'Khác',
      1 => 'S',
      2 => 'M',
      3 => 'L',
      4 => 'XL',
      5 => 'XXL',
      6 => '36',
      7 => '37',
      8 => '38',
      9 => '39',
      10 => '40',
      11 => '41',
      12 => '42',
      13 => '43',
      14 => '44',
      15 => 'Free size'
    ];

    if( $key !== 'array' ) return array_key_exists($key, $sizeArray) ? $sizeArray[$key] : $sizeArray[0];
    return $sizeArray;
  }
}

if( !function_exists('productGender') ){
  function productGender($key = 'array'){
    $genderArray = [
      0 => 'Trộn',
      1 => 'Nam',
      2 => 'Nữ'
    ];

    if( $key !== 'array' ) return array_key_exists($key, $genderArray) ? $genderArray[$key] : $genderArray[0];
    return $genderArray;
  }
}

if( !function_exists('productUnit') ){
  function productUnit($key = 'array'){
    $unitArray = [
      0 => 'Khác',
      1 => 'Hộp',
      2 => 'Đôi',
      3 => 'Bộ',
      5 => 'Lượt',
      6 => 'Cái'
    ];

    if( $key !== 'array' ) return array_key_exists($key, $unitArray) ? $unitArray[$key] : $unitArray[0];
    return $unitArray;
  }
}

if( !function_exists('productSource') ){
  function productSource($key = 'array'){
    $sourceArray = [
      0  => 'Khác',
      1  => 'Lining',
      2  => 'Cao Xuân Quang',
      3  => 'Tiến Dinh Sport',
      4  => 'Đức An Sport',
      5  => 'K-sport',
      6  => 'Nam Trường Badminton',
      7  => 'Linksports',
      8  => 'Apavi',
      9  => 'Wsport',
      10 => 'Wingsport',
      11 => 'Hợi Kamito',
      12 => 'Shopee'
    ];

    if( $key !== 'array' ) return array_key_exists($key, $sourceArray) ? $sourceArray[$key] : $sourceArray[0];
    return $sourceArray;
  }
}

if( !function_exists('productName') ){
  function productName($product){
    return $product->product_name . ' - ' . productColor($product->product_color);
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
    return $string->productype_name .' '. $string->product_name .' - '. productColor($string->product_color);
  }
}

if( !function_exists('productClassification') ){
  function productClassification($products){
    $productClassification = []; $productypeClassification = [];
    foreach($products as $key => $product){
      if( !empty( $product->productype_code ) ){
        $productClassification[$product->productype_code][] = $product;
        $productypeClassification[$product->productype_code] = $product->productype_name;
      }
    }

    $responses = [
      'products' => $productClassification,
      'productypes' => $productypeClassification
    ];
    
    return $responses;
  }
}
