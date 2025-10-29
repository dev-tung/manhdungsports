@extends('pos.layouts.cover')
@section('Title', 'CÁC ĐƠN HÀNG')
@section('PageJs', asset('pos/js/invoice/index.js'))
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('invoice.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="invoice_name" placeholder="Tìm kiếm ..." value="{{ request()->invoice_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="productype_id" id="ProductType">
                            <option value="">-- Loại sản phẩm --</option>
                            @foreach($productypes as $item)
                                <option value="{{$item->productype_id}}" {{ (request()->productype_id == $item->productype_id) ? 'selected' : ''; }}>{{$item->productype_name}}</option>
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
                    <button class="ListSearchFormBtn" type="reset"><a href="{{route('invoice.index')}}">Xóa</a></button>
                    <button class="ListSearchFormBtn ListSearchFormBtn_Submit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ count($invoices) }} đơn hàng</span>
                <span class="ListSearchTotalItem">-</span>
                <span class="ListSearchTotalItem">Doanh thu {{ commonNumberToVND(array_sum(array_column($invoices, 'invoice_revenue'))) }} </span>
                @if( !empty( request()->profit == 1 ) )
                    <span class="ListSearchTotalItem">-</span>
                    <span class="ListSearchTotalItem">Lợi nhuận {{ commonNumberToVND(array_sum(array_column($invoices, 'invoice_profit'))) }} </span>
                @endif
            </div>

            <table>
                <thead>
                    <tr class="TableRow">
                        <th class="TableData">Ngày</th>
                        <th class="TableData">Khách hàng</th>
                        <th class="TableData">Nhóm khách hàng</th>
                         <th class="TableData">Danh mục</th>
                        <th class="TableData">Sản phẩm</th>
                        <th class="TableData">Đơn giá</th>
                        <th class="TableData">Số lượng</th>
                        <th class="TableData">Giá tiền</th>
                        <th class="TableData">Chiết khấu</th>
                        @if( !empty( request()->profit == 1 ) )
                            <th class="TableData">Lợi nhuận</th>
                        @endif
                        <th class="TableData">Trạng thái</th>
                        <th class="TableData">Thanh toán</th>
                        <th class="TableData">Hành động</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach( $invoices as $key => $invoice )
                        <tr class="TableRow">
                            <td class="TableData TableData_Center">{{ date('d-m-Y', strtotime($invoice->invoice_created_at)) }}</td>
                            <td class="TableData">{{ $invoice->customer_name }}</td>
                            <td class="TableData">{{ $invoice->customergroup_name }}</td>
                            <td class="TableData">{{ $invoice->productype_name}}</td>
                            <td class="TableData">{{ $invoice->product_name}}</td>
                            <td class="TableData">{{ commonNumberToVND($invoice->product_price_output)}}</td>
                            <td class="TableData TableData_Center">{{ $invoice->invoice_quantity}}</td>
                            <td class="TableData">{{ commonNumberToVND($invoice->invoice_revenue) }}</td>
                            <td class="TableData">{{ commonNumberToVND($invoice->invoice_discount) }}</td>
                            @if( !empty( request()->profit == 1 ) )
                                <td class="TableData">{{ commonNumberToVND($invoice->invoice_profit) }}</td>
                            @endif
                            <td class="TableData">
                                <select class="TableDataSelect InvoiceSelect InvoiceStatus" name="invoice_status" data-invoice_id="{{ $invoice->invoice_id }}">
                                    @foreach( invoiceStatus() as $key => $item )
                                        <option value="{{$key}}" {{ ($key == $invoice->invoice_status) ? 'selected' : ''; }}>{!!$item!!}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="TableData">
                                <select class="TableDataSelect InvoiceSelect InvoiceIspayment" name="invoice_ispayment" data-invoice_id="{{ $invoice->invoice_id }}">
                                    @foreach( commomIspayment() as $key => $item )
                                        <option value="{{$key}}" {{ ($key == $invoice->invoice_ispayment) ? 'selected' : ''; }}>{!!$item!!}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="TableData TableData_Center TableData_Flex">
                                @if( $invoice->invoice_status !== 4 )
                                    <a class="TableAction TableAction_Link" href="{{route('invoice.edit', ['invoice_id' => $invoice->invoice_id])}}">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                        </svg>
                                    </a>
                                @else
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                    </svg>
                                @endif
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="TableAction Text_Danger" href="{{route('invoice.delete', ['invoice_id' => $invoice->invoice_id])}}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem Text_Danger">Thành tiền {{ commonNumberToVND(array_sum(array_column($invoices, 'invoice_revenue'))) }}</span>
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