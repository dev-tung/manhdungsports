@extends('pos.layouts.cover')
@section('Title', 'THÊM ĐƠN HÀNG')
@section('PageJs', asset('pos/js/invoice/order.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('invoice.insert')}}" method="POST" class="Form" id="FormInvoiceAdd" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="ProductPriceInput"  name="product_price_input">
            <input type="hidden" id="ProductPriceOutput" name="product_price_output">
            <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="InvoiceQuantity">Khách hàng <span class="RequiredSymbol">*</span></label>
                    <input class="FormInput" id="InvoiceQuantity" type="text" name="invoice_quantity">
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductType" >Mặt hàng <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="product_id" id="ProductType">
                            <option value="">-- Chọn mặt hàng --</option>
                            @foreach( $products as $product )
                                <option 
                                    data-product_price_input="{{$product->product_price_input}}"
                                    data-product_price_output="{{$product->product_price_output}}"
                                    value="{{$product->product_id}}"
                                >{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="InvoiceQuantity">Số lượng <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="InvoiceQuantity" type="number" name="invoice_quantity">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
            </div>
            <div class="FormGrid FormGridDesktop_Two">
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="InvoiceDiscount">Chiết khấu (VNĐ)</label>
                        <input class="FormInput" id="InvoiceDiscount" type="number" name="invoice_discount">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="InvoiceStatus" >Trạng thái <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="invoice_status" id="InvoiceStatus">
                            @foreach( invoiceStatus() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="InvoiceIspayment" >Trạng thái thanh toán <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="invoice_ispayment" id="InvoiceIspayment">
                            @foreach( commomIspayment() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="InvoiceDescription" >Ghi chú</label>
                        <input class="FormInput" id="InvoiceDescription" type="text" name="invoice_description">
                        <small class="FormErrorMessage"></small>
                    </div>
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


