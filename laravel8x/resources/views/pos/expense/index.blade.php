@extends('pos.layouts.cover')
@section('Title', 'CHI PHÍ')
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('expense.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="expense_name" placeholder="Tìm kiếm ..." value="{{ request()->expense_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="expensetype_id" id="ProductType">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach( expenseType() as $key => $item )
                                <option value="{{$key}}" {{ ($key == request()->expensetype_id) ? 'selected' : ''; }}>{!!$item!!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ListSearchFormGroup ListSearchFormGroup_Date">
                        <label class="ListSearchFormLabel" for="">Từ ngày</label>
                        <input class="ListSearchFormInput ListSearchFormInput_Date" type="date" name="expense_created_at_from" value="{{ request()->expense_created_at_from }}">
                    </div>
                    <div class="ListSearchFormGroup ListSearchFormGroup_Date">
                        <label class="ListSearchFormLabel" for="">Đến ngày</label>
                        <input class="ListSearchFormInput ListSearchFormInput_Date" type="date" name="expense_created_at_to" value="{{ request()->expense_created_at_to }}">
                    </div>
                    <button class="ListSearchFormBtn" type="reset"><a href="{{route('expense.index')}}">Xóa</a></button>
                    <button class="ListSearchFormBtn ListSearchFormBtn_Submit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">{{ count($expenses) }} lần chi tiêu</span>
                <span class="ListSearchTotalItem">-</span>
                <span class="ListSearchTotalItem">Tổng chi {{ commonNumberToVND(array_sum(array_column($expenses, 'expense_money'))) }} </span>
            </div>

            <table>
                <thead>
                    <tr class="TableRow">
                        <th class="TableData">Ngày</th>
                        <th class="TableData">Khoản chi</th>
                        <th class="TableData">Loại chi phí</th>
                        <th class="TableData">Tiền</th>
                        <th class="TableData">Mô tả</th>
                        <th class="TableData">Thanh toán</th>
                        <th class="TableData">Hành động</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach( $expenses as $key => $expense )
                        <tr class="TableRow">
                            <td class="TableData TableData_Center">{{ date('Y-m-d', strtotime($expense->expense_created_at)) }}</td>
                            <td class="TableData">{{ $expense->expense_name }}</td>
                            <td class="TableData">{{ expenseType($expense->expensetype_id) }}</td>
                            <td class="TableData">{{ commonNumberToVND($expense->expense_money) }}</td>
                            <td class="TableData">{{ $expense->expense_description }}</td>
                            <td class="TableData">{!! commomIspayment($expense->expense_ispayment) !!}</td>
                            <td class="TableData TableData_Center">
                                <a class="TableAction TableAction_Link" href="{{route('expense.edit', ['expense_id' => $expense->expense_id])}}">
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
        <a class="Btn Btn_Success" href="{{route('expense.add')}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection