@extends('pos.layouts.cover')
@section('Title', 'KHÁCH HÀNG')
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('customer.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="customer_name" placeholder="Tìm kiếm khách hàng ..." value="{{ request()->customer_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="customergroup_id" id="customergroup_id">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($customergroup as $item)
                                <option value="{{$item->customergroup_id}}">{{$item->customergroup_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="ListSearchFormBtn ListSearchFormBtn_Submit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ count($customer) }} khách hàng</span>
            </div>

            <div class="List">
                @foreach( $customer as $customer )
                    <a class="ListItem" href="{{route('customer.edit', ['customer_id' => $customer->customer_id])}}">
                        <div class="ListItemInfo">
                            <h4 class="ListItemName">{{ $customer->customer_name }}</h4>
                            <div class="ListSpanGroup">
                                <span class="ListItemSpan">{{ $customer->customergroup_name }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('customer.add')}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection