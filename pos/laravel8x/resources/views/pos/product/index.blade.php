@extends('pos.layouts.cover')
@section('title', 'DANH SÁCH SẢN PHẨM')
@section('main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="ListSearchFormText" placeholder="Tìm kiếm sản phẩm ...">
                </form>
            </div>
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ $products->count() }} sản phẩm</span>
                <span>-</span>
                <span class="ListSearchTotalItem">Giá nhập {{ $products->sum('product_price_input') }} đ</span>
            </div>
            <div class="List">
                @foreach( $products as $product )
                    <a class="ListItem" href="{{route('product.edit')}}">
                        <div class="ListItemThumnail">
                            <img class="ListItemThumnail" src="{{asset('pos/img/77.png')}}">
                        </div>
                        <div class="ListItemInfo">
                            <h4 class="ListItemName">{{ $product->product_name }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">Giá nhập {{ $product->product_price_input }} đ</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá bán {{ $product->product_price_output }} đ</span>
                                <span>-</span>
                                <span class="ListItemSpan">Tồn kho {{ $product->product_quantity }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- End Main -->
@endsection