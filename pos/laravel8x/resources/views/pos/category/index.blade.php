@extends('pos.layouts.cover')
@section('title', 'DANH MỤC')
@section('main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('category.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="category_name" placeholder="Tìm kiếm sản phẩm ..." value="{{ request()->category_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="category_category" id="CategoryCategory">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="Vợt cầu lông">Vợt cầu lông</option>
                            <option value="Giày cầu lông">Giày cầu lông</option>
                            <option value="Quần cầu lông">Quần cầu lông</option>
                            <option value="Áo cầu lông">Áo cầu lông</option>
                            <option value="Túi ngang">Túi ngang</option>
                            <option value="Balo">Balo</option>
                            <option value="Túi hở cán">Túi hở cán</option>
                            <option value="Cầu">Cầu</option>
                            <option value="Phụ kiện">Phụ kiện</option>
                        </select>
                    </div>
                    <button class="ListSearchFormSubmit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ $categorys->count() }} sản phẩm</span>
                <span>-</span>
                <span class="ListSearchTotalItem">Tổng giá nhập {{ number_format( $categorys->sum('category_price_input') ) }} đ</span>
            </div>

            <div class="List">
                @foreach( $categorys as $category )
                    <a class="ListItem" href="{{route('category.edit')}}">
                        <div class="ListItemthumbnail">
                            @if( !empty( $category->category_thumbnail ) )
                                <img class="ListItemthumbnail" src="{{ $category->category_thumbnail }}">
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
                            <h4 class="ListItemName">{{ $category->category_name }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">Tồn kho {{ $category->category_quantity }}</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá nhập {{ number_format($category->category_price_input) }} đ</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá bán {{ number_format($category->category_price_output) }} đ</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- End Main -->
@endsection