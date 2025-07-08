@extends('pos.layouts.cover')
@section('Title', 'CÁC ĐƠN HÀNG')
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('invoice.index', ['screen'=>'pos'])}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="invoice_name" placeholder="Tìm kiếm ..." value="{{ request()->invoice_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="customer_id" id="Customer">
                            <option value="">-- Khách hàng --</option>
                            @foreach($customers as $item)
                                <option value="{{$item->customer_id}}" {{ (request()->customer_id == $item->customer_id) ? 'selected' : ''; }}>{{$item->customer_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="invoice_ispayment" id="InvoiceIspayment">
                            <option value="">-- Trạng thái thanh toán --</option>
                            @foreach( commomIspayment() as $key => $item )
                                 <option value="{{$key}}" {{ isset(request()->invoice_ispayment) && ($key == request()->invoice_ispayment) ? 'selected' : ''; }}>{!!$item!!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ListSearchFormGroup ListSearchFormGroup_Date">
                        <label class="ListSearchFormLabel" for="">Từ ngày</label>
                        <input class="ListSearchFormInput ListSearchFormInput_Date" type="date" name="invoice_created_at_from" value="{{ request()->invoice_created_at_from }}">
                    </div>
                    <div class="ListSearchFormGroup ListSearchFormGroup_Date">
                        <label class="ListSearchFormLabel" for="">Đến ngày</label>
                        <input class="ListSearchFormInput ListSearchFormInput_Date" type="date" name="invoice_created_at_to" value="{{ request()->invoice_created_at_to }}">
                    </div>
                    <button class="ListSearchFormBtn" type="reset"><a href="{{route('invoice.index', ['screen'=>'pos'])}}">Xóa</a></button>
                    <button class="ListSearchFormBtn ListSearchFormBtn_Submit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ count($productorders) + count($stringorders) }} hóa đơn</span>
                
            </div>

            <table>
                <thead>
                    <tr class="TableRow">
                        <th class="TableData">Ngày</th>
                        <th class="TableData">Khách hàng</th>
                        <th class="TableData">Nhóm khách hàng</th>
                        <th class="TableData">Sản phẩm</th>
                        <th class="TableData">Thay Ghen</th>
                        <th class="TableData">Hàn</th>
                        <th class="TableData">Số lượng</th>
                        <th class="TableData">Chiết khấu</th>
                        <th class="TableData">Giá tiền</th>
                        <th class="TableData">Thanh toán</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach( $productorders as $key => $productorder )
                        <tr class="TableRow">
                            <td class="TableData TableData_Center">{{ date('d-m-Y', strtotime($productorder->productorder_created_at)) }}</td>
                            <td class="TableData">{{ $productorder->customer_name }}</td>
                            <td class="TableData">{{ $productorder->customergroup_name }}</td>
                            <td class="TableData">{{ $productorder->product_name}}</td>
                            <td class="TableData TableData_Center">Không</td>
                            <td class="TableData TableData_Center">Không</td>
                            <td class="TableData TableData_Center">{{ $productorder->productorder_quantity}}</td>
                            <td class="TableData">{{ commonNumberToVND($productorder->productorder_discount) }}</td>
                            <td class="TableData TableData_Center">{{ commonNumberToVND($productorder->productorder_revenue) }}</td>
                            <td class="TableData">{!! commomIspayment($productorder->productorder_ispayment) !!}</td>
                        </tr>
                    @endforeach
                    @foreach( $stringorders as $key => $stringorder )
                        <tr class="TableRow">
                            <td class="TableData TableData_Center">{{ date('d-m-Y', strtotime($stringorder->stringorder_created_at)) }}</td>
                            <td class="TableData">{{ $stringorder->customer_name }}</td>
                            <td class="TableData">{{ $stringorder->customergroup_name }}</td>
                            <td class="TableData">{{ stringType($stringorder)}}</td>
                            <td class="TableData TableData_Center">{!! commomYesNoOption($stringorder->stringorder_gen) !!}</td>
                            <td class="TableData TableData_Center">{!! commomYesNoOption($stringorder->stringorder_is_welding) !!}</td>
                            <td class="TableData TableData_Center">1</td>
                            <td class="TableData">{{ commonNumberToVND($stringorder->stringorder_discount) }}</td>
                            <td class="TableData TableData_Center">{{ commonNumberToVND($stringorder->stringorder_revenue) }}</td>
                            <td class="TableData">{!! commomIspayment($stringorder->stringorder_ispayment) !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem Text_Danger">Tổng tiền {{ commonNumberToVND(array_sum(array_column($productorders, 'productorder_revenue'))) }}</span>
            </div>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('invoice.add', ['screen'=>'pos'])}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection