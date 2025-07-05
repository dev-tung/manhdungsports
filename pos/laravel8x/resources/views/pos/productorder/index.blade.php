@extends('pos.layouts.cover')
@section('Title', 'CÁC ĐƠN HÀNG')
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('productorder.index', ['screen'=>'pos'])}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="productorder_name" placeholder="Tìm kiếm ..." value="{{ request()->productorder_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="productype_id" id="ProductType">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($productypes as $item)
                                <option value="{{$item->productype_id}}" {{ (request()->productype_id == $item->productype_id) ? 'selected' : ''; }}>{{$item->productype_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ListSearchFormGroup ListSearchFormGroup_Date">
                        <label class="ListSearchFormLabel" for="">Từ ngày</label>
                        <input class="ListSearchFormInput ListSearchFormInput_Date" type="date" name="productorder_created_at_from" value="{{ request()->productorder_created_at_from }}">
                    </div>
                    <div class="ListSearchFormGroup ListSearchFormGroup_Date">
                        <label class="ListSearchFormLabel" for="">Đến ngày</label>
                        <input class="ListSearchFormInput ListSearchFormInput_Date" type="date" name="productorder_created_at_to" value="{{ request()->productorder_created_at_to }}">
                    </div>
                    <button class="ListSearchFormBtn" type="reset"><a href="{{route('productorder.index', ['screen'=>'pos'])}}">Xóa</a></button>
                    <button class="ListSearchFormBtn ListSearchFormBtn_Submit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ count($productorders) }} đơn hàng</span>
                <span class="ListSearchTotalItem">-</span>
                <span class="ListSearchTotalItem">Doanh thu hôm nay {{ commonNumberToVND(array_sum(array_column($todayMoney, 'productorder_revenue'))) }} </span>
                <span class="ListSearchTotalItem">-</span>
                <span class="ListSearchTotalItem">Lợi nhuận hôm nay {{ commonNumberToVND(array_sum(array_column($todayMoney, 'productorder_profit'))) }} </span>
            </div>

            <table>
                <thead>
                    <tr class="TableRow">
                        <th class="TableData">Ngày</th>
                        <th class="TableData">Khách hàng</th>
                        <th class="TableData">Nhóm khách hàng</th>
                        <th class="TableData">Sản phẩm</th>
                        <th class="TableData">Số lượng</th>
                        <th class="TableData">Danh mục</th>
                        <th class="TableData">Triết khấu</th>
                        <th class="TableData">Giá tiền</th>
                        <th class="TableData">Lợi nhuận</th>
                        <th class="TableData">Trạng thái</th>
                        <th class="TableData">Thanh toán</th>
                        <th class="TableData">Hành động</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach( $productorders as $key => $productorder )
                        <tr class="TableRow">
                            <td class="TableData TableData_Center">{{ date('d-m-Y', strtotime($productorder->productorder_created_at)) }}</td>
                            <td class="TableData">{{ $productorder->customer_name }}</td>
                            <td class="TableData">{{ $productorder->customergroup_name }}</td>
                            <td class="TableData">{{ $productorder->product_name}}</td>
                            <td class="TableData TableData_Center">{{ $productorder->productorder_quantity}}</td>
                            <td class="TableData">{{ $productorder->productype_name}}</td>
                            <td class="TableData">{{ commonNumberToVND($productorder->productorder_discount) }}</td>
                            <td class="TableData TableData_Center">{{ commonNumberToVND($productorder->productorder_revenue) }}</td>
                            <td class="TableData TableData_Center">{{ commonNumberToVND($productorder->productorder_profit) }}</td>
                            <td class="TableData">{!! productorderStatus($productorder->productorder_status) !!}</td>
                            <td class="TableData">{!! commomIspayment($productorder->productorder_ispayment) !!}</td>
                            <td class="TableData TableData_Center">
                                <a class="TableAction TableAction_Link" href="{{route('productorder.edit', ['screen'=>'pos', 'productorder_id' => $productorder->productorder_id])}}">
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
        <a class="Btn Btn_Success" href="{{route('productorder.add', ['screen'=>'pos'])}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection