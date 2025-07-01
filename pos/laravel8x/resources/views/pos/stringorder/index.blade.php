@extends('pos.layouts.cover')
@section('title', 'KHÁCH CĂNG CƯỚC')
@section('main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('stringorder.index', ['screen'=>'pos'])}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="stringorder_name" placeholder="Tìm kiếm ..." value="{{ request()->stringorder_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="customer_id" id="customer_id">
                            <option value="">-- Chọn khách hàng --</option>
                            @foreach( $customers as $customer )
                                <option value="{{$customer->customer_id}}">{{$customer->customergroup_name}} - {{$customer->customer_name}}</option>
                            @endforeach
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
                <span class="ListSearchTotalItem">{{ count($stringorders) }} lượt căng cước</span>
            </div>

            <table>
                <thead>
                    <tr class="TableRow">
                        <th class="TableData">Ngày</th>
                        <th class="TableData">Khách hàng</th>
                        <th class="TableData">Nhóm khách hàng</th>
                        <th class="TableData">Loại cước</th>
                        <th class="TableData">KG</th>
                        <th class="TableData">Thay gen</th>
                        <th class="TableData">Hàn</th>
                        <th class="TableData">Triết khấu</th>
                        <th class="TableData">Giá tiền</th>
                        <th class="TableData">Lợi nhuận</th>
                        <th class="TableData">Hẹn lấy</th>
                        <th class="TableData">Trạng thái</th>
                        <th class="TableData">Thanh toán</th>
                        <th class="TableData">Hành động</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach( $stringorders as $key => $stringorder )
                        <tr class="TableRow">
                            <td class="TableData TableData_Center">{{ date('d-m-Y', strtotime($stringorder->updated_at)) }}</td>
                            <td class="TableData">{{ $stringorder->customer_name }}</td>
                            <td class="TableData">{{ $stringorder->customergroup_name }}</td>
                            <td class="TableData">{{ stringType($stringorder)}}</td>
                            <td class="TableData TableData_Center">{{ $stringorder->stringorder_kg }}</td>
                            <td class="TableData TableData_Center">{!! commomYesNoOption($stringorder->stringorder_gen) !!}</td>
                            <td class="TableData TableData_Center">{!! commomYesNoOption($stringorder->stringorder_welding) !!}</td>
                            <td class="TableData">{{ commonNumberToVND($stringorder->stringorder_discount) }}</td>
                            <td class="TableData TableData_Center">{{ stringorderRevenue($stringorder) }}</td>
                            <td class="TableData TableData_Center">{{ stringorderProfit($stringorder) }}</td>
                            <td class="TableData">{{ $stringorder->stringorder_timereturn }}</td>
                            <td class="TableData">{!! stringorderStatus($stringorder->stringorder_status) !!}</td>
                            <td class="TableData">{!! commomIspayment($stringorder->stringorder_ispayment) !!}</td>
                            <td class="TableData TableData_Center">
                                <a class="TableAction TableAction_Link" href="{{route('stringorder.edit', ['screen'=>'pos', 'stringorder_id' => $stringorder->stringorder_id])}}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                    </svg>
                                </a>
                            </td>
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