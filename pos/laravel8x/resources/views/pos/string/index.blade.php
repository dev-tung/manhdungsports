@extends('pos.layouts.cover')
@section('title', 'DANH SÁCH LOẠI CƯỚC')
@section('main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('string.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="string_name" placeholder="Tìm kiếm ..." value="{{ request()->string_name }}">

                    <button class="ListSearchFormSubmit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ $string->count('string_id') }} loại cước</span>
                <span>-</span>
                <span class="ListSearchTotalItem">Tổng giá nhập {{ number_format( $priceTotalInput ) }} đ</span>
            </div>

            <div class="List">
                @foreach( $string as $string )
                    <a class="ListItem" href="{{route('string.edit', $string->string_id)}}">
                        <div class="ListItemInfo">
                            <h4 class="ListItemName">[{{ commomGetStringTypeName($string->string_type) }}] {{ $string->string_name }} - {{ commomGetColorName($string->string_color) }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">Tồn kho {{ number_format($string->string_quantity) }}</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá nhập {{ commomGetEachStringPriceInput($string->string_price_input, $string->string_type) }} đ</span>
                                <span>-</span>
                                <span class="ListItemSpan">Giá căng {{ number_format($string->string_price_output) }} đ</span>
                                <span>-</span>
                                <span class="ListItemSpan">Lãi {{ commomGetStringProfit($string->string_price_input, $string->string_price_output, $string->string_type) }} đ</span>
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