@extends('pos.layouts.cover')
@section('title', 'DANH SÁCH LOẠI CƯỚC')
@section('main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('string.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="string_name" placeholder="Tìm kiếm loại cước ..." value="{{ request()->string_name }}">

                    <button class="ListSearchFormSubmit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ $string->sum('string_quantity') }} loại cước</span>
            </div>

            <div class="List">
                @foreach( $string as $string )
                    <a class="ListItem" href="{{route('string.edit', $string->string_id)}}">
                        <div class="ListItemthumbnail">
                            @if( !empty( $string->string_thumbnail ) )
                                <img class="ListItemthumbnail" src="{{ asset($string->string_thumbnail) }}">
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
                            <h4 class="ListItemName">{{ $string->string_name }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">Tồn kho {{ $string->string_quantity }}</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá nhập {{ number_format($string->string_price_input) }} đ</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá bán {{ number_format($string->string_price_output) }} đ</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('string.add')}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection