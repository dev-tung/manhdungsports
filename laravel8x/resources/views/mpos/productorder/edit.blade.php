@extends('pos.layouts.cover')
@section('Title', 'THÊM ĐƠN HÀNG')
@section('pagejs', asset('pos/js/invoice/edit.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('invoice.update', $invoice->invoice_id)}}" method="POST" class="Form" id="FormInvoiceEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="CustomerId" >Khách hàng <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="customer_id" id="CustomerId">
                        @foreach( $customers as $customer )
                            <option value="{{$customer->customer_id}}" {{ ($customer->customer_id == $invoice->customer_id) ? 'selected' : ''; }}>{{$customer->customergroup_name}} - {{$customer->customer_name}}</option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductType" >Mặt hàng <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="product_id" id="ProductType">
                            <option value="">-- Chọn mặt hàng --</option>
                            @foreach( $products as $product )
                                <option value="{{$product->product_id}}" {{ ($product->product_id == $invoice->product_id) ? 'selected' : ''; }}>{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="InvoiceQuantity">Số lượng</label>
                        <input class="FormInput" id="InvoiceQuantity" type="number" name="invoice_quantity" value="{{$invoice->invoice_quantity}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
            </div>
            <div class="FormGrid FormGridDesktop_Two">
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup">
                        <label class="FormLabel" for="InvoiceDiscount">Chiết khấu (VNĐ)</label>
                        <input class="FormInput" id="InvoiceDiscount" type="number" name="invoice_discount" value="{{$invoice->invoice_discount}}">
                    </div>
                    <div class="FormGroup">
                        <label class="FormLabel" for="InvoiceTimereturn" >Thời gian giao hàng</label>
                        <input class="FormInput" id="InvoiceTimereturn" type="text" name="invoice_timereturn" value="{{$invoice->invoice_timereturn}}">
                    </div>
                </div>

                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="InvoiceIspayment" >Trạng thái thanh toán <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="invoice_ispayment" id="InvoiceIspayment">
                            @foreach( commomIspayment() as $key => $item )
                                 <option value="{{$key}}" {{ ($key == $invoice->invoice_ispayment) ? 'selected' : ''; }}>{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup">
                        <label class="FormLabel" for="InvoiceDescription" >Ghi chú</label>
                        <input class="FormInput" id="InvoiceDescription" type="text" name="invoice_description" value="{{$invoice->invoice_description}}">
                    </div>
                </div>
            </div>

            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('invoice.delete', $invoice->invoice_id)}}" >Xóa</a>
                </div>
            </div>
        </form>
        
    </main>
    <!-- End Main -->
     


@endsection


