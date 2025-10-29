@extends('pos.layouts.cover')
@section('Title', 'THÊM CHI PHÍ')
@section('PageJs', asset('pos/js/expense/add.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('expense.insert')}}" method="POST" class="Form" id="FormExpenseAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="ExpenseName">Chi phí <span class="RequiredSymbol">*</span></label>
                    <input class="FormInput" id="ExpenseName" type="text" name="expense_name">
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="ExpenseType" >Loại chi phí <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="expensetype_id" id="ExpenseType">
                        @foreach( expenseType() as $key => $item )
                            <option value="{{$key}}">{!!$item!!}</option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
            </div>
            <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="ExpenseMoney">Số tiền <span class="RequiredSymbol">*</span></label>
                    <input class="FormInput" id="ExpenseMoney" type="number" name="expense_money">
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="ExpenseIspayment" >Trạng thái <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="expense_ispayment" id="ExpenseIspayment">
                        @foreach( commomIspayment() as $key => $item )
                            <option value="{{$key}}">{!!$item!!}</option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
            </div>
            <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="ExpenseCreatedAt">Ngày tạo</label>
                    <input class="FormInput" id="ExpenseCreatedAt" type="date" name="expense_created_at" value="{{ date('Y-m-d') }}">
                    <small class="FormErrorMessage"></small>
                </div> 
                <div class="FormGroup">
                    <label class="FormLabel" for="ExpenseDescription">Ghi chú</label>
                    <input class="FormInput" id="ExpenseDescription" type="text" name="expense_decription">
                </div>
            </div>

            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
            </div>
        </form>
        
    </main>
    <!-- End Main -->
@endsection


