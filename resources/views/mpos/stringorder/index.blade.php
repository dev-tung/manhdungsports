@extends('pos.layouts.cover')
@section('Title', 'KHÁCH CĂNG CƯỚC')
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('stringorder.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="stringorder_name" placeholder="Tìm kiếm ..." value="{{ request()->stringorder_name }}">
                    <button class="ListSearchFormSubmit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ count($stringorders) }} lượt căng cước</span>
            </div>

            <div class="List">
                @foreach( $stringorders as $stringorder )
                    <a class="ListItem" href="{{route('stringorder.edit', ['stringorder_id' => $stringorder->stringorder_id])}}">
                        <div class="ListItemInfo">
                            <h4 class="ListItemName">{{ $stringorder->customer_name }} - [{{ stringGetType($stringorder->string_type) }}] {{ $stringorder->string_name }} - {{ stringGetColor($stringorder->string_color) }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">Doanh Thu {{ commomGetProductRevenue($stringorder->string_price_output, 1, $stringorder->stringorder_discount)}} đ</span> 
                                <span>-</span>
                                <span class="ListItemSpan">Hẹn lấy {{ $stringorder->stringorder_timereturn }}</span>
                                <span>-</span>
                                <span class="ListItemSpan">{!! stringorderStatus($stringorder->stringorder_status) !!}</span>
                                <span>-</span>
                                <span class="ListItemSpan">{!! commomIspayment($stringorder->stringorder_ispayment) !!} </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('stringorder.add')}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection