@extends('pos.layouts.cover')
@section('Title', 'KHÁCH ĐƠN HÀNG')
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('invoice.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="invoice_name" placeholder="Tìm kiếm ..." value="{{ request()->invoice_name }}">
                    <button class="ListSearchFormSubmit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ count($invoices) }} Đơn hàng</span>
            </div>

            <div class="List">
                @foreach( $invoices as $invoice )
                    <a class="ListItem" href="{{route('invoice.edit', $invoice->invoice_id)}}">
                        <div class="ListItemInfo">
                            <h4 class="ListItemName">{{ $invoice->customer_name }} - {{ $invoice->invoice_quantity }} {{ $invoice->product_name }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">Thanh toán {{ commomGetProductRevenue($invoice->product_price_output, $invoice->invoice_quantity, $invoice->invoice_discount) }} đ</span>    
                                <span>-</span>
                                <span class="ListItemSpan">Lãi {{ commomGetProductProfit($invoice->product_price_input, $invoice->product_price_output, $invoice->invoice_quantity, $invoice->invoice_discount) }}</span>
                                <span>-</span>
                                <span class="ListItemSpan">{!! commomIspayment($invoice->invoice_ispayment) !!} </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('invoice.add')}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection