@extends('pos.layouts.cover')
@section('title', 'KHÁCH CĂNG CƯỚC')
@section('main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('stringorder.index', ['screen'=>'pos'])}}" class="ListSearchForm">
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

            <table>
                <thead>
                    <tr>
                        <th>Ngày</th>
                        <th>Khách hàng</th>
                        <th>Nhóm khách hàng</th>
                        <th>Loại cước</th>
                        <th>Thay gen</th>
                        <th>Hàn</th>
                        <th>Triết khấu</th>
                        <th>Giá tiền</th>
                        <th>Lợi nhuận</th>
                        <th>KG</th>
                        <th>Hẹn lấy</th>
                        <th>Trạng thái</th>
                        <th>Thanh toán</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach( $stringorders as $key => $stringorder )
                        <tr >
                            <th>{{ date('d-m-Y', strtotime($stringorder->updated_at)) }}</th>
                            <td>{{ $stringorder->customer_name }}</td>
                            <td>{{ $stringorder->customergroup_name }}</td>
                            <td>{{ stringTypeDisplay($stringorder)}}</td>
                            <th>{!! commomYesNoOption($stringorder->stringorder_gen) !!}</th>
                            <th>{!! commomYesNoOption($stringorder->stringorder_welding) !!}</th>
                            <td>{{ number_format($stringorder->stringorder_discount) }} đ</td>
                            <th>{{ stringorderRevenue($stringorder) }}</th>
                            <th>{{ stringorderProfit($stringorder) }}</th>
                            <td>{{ $stringorder->stringorder_kg }}</td>
                            <td>{{ $stringorder->stringorder_timereturn }}</td>
                            <td>{!! stringorderStatus($stringorder->stringorder_status) !!}</td>
                            <td>{!! commomIspayment($stringorder->stringorder_ispayment) !!}</td>
                            <th><a href="{{route('stringorder.edit', ['screen'=>'pos', 'stringorder_id' => $stringorder->stringorder_id])}}">Sửa</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('stringorder.add', ['screen'=>'pos'])}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection