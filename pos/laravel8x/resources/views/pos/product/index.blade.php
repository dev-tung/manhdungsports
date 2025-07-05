@extends('pos.layouts.cover')
@section('Title', 'DANH SÁCH SẢN PHẨM')
@section('TopbarNav_Left')
    <nav class="TopbarNav_Left">
        <a class="TopbarNavLink" href="{{route('productype.index', ['screen'=>'pos'])}}">
            <span class="TopbarNavText">Loại sản phẩm</span> 
        </a>
    </nav>
@endsection
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('product.index', ['screen'=>'pos'])}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="product_name" placeholder="Tìm kiếm sản phẩm ..." value="{{ request()->product_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="productype_id" id="ProductType">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($productype as $item)
                                <option value="{{$item->productype_id}}" {{ (request()->productype_id == $item->productype_id) ? 'selected' : ''; }}>{{$item->productype_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="ListSearchFormBtn" type="reset"><a href="{{route('product.index', ['screen'=>'pos'])}}">Xóa</a></button>
                    <button class="ListSearchFormBtn ListSearchFormBtn_Submit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ $product->sum('product_quantity') }} sản phẩm</span>
                <span>-</span>
                <span class="ListSearchTotalItem">Tổng giá nhập {{ commonNumberToVND( $priceTotalInput ) }}</span>
            </div>

            <div class="List">
                @foreach( $product as $product )
                    <a class="ListItem" href="{{route('product.edit', ['screen'=>'pos', 'product_id' => $product->product_id])}}">
                        <div class="ListItemthumbnail">
                            @if( !empty( $product->product_thumbnail ) )
                                <img class="ListItemthumbnail" src="{{ asset($product->product_thumbnail) }}">
                            @else
                                <svg class="ListItemthumbnail ListItemthumbnail_default" viewBox="-9 -4 49 50" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Khung hình ảnh -->
                                    <rect x="0" y="8" width="30" height="28" rx="2" ry="2" fill="#e0e0e0" stroke="#555" stroke-width="1"/>

                                    <!-- Mặt trời -->
                                    <circle cx="10" cy="18" r="2.5" fill="#777" />

                                    <!-- Núi -->
                                    <polyline points="5,34 12,25 18,31 24,26 30,34" fill="none" stroke="#555" stroke-width="1" />
                                </svg>
                            @endif
                        </div>
                        <div class="ListItemInfo">
                            <h4 class="ListItemName">{{ $product->product_name }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">Tồn kho {{ $product->product_quantity }}</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá nhập {{ commonNumberToVND($product->product_price_input) }}</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá bán {{ commonNumberToVND($product->product_price_output) }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('product.add', ['screen'=>'pos'])}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection