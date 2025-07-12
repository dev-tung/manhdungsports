@extends('pos.layouts.cover')
@section('Title', 'THÊM ĐƠN HÀNG')
@section('PageJs', asset('pos/js/invoice/add.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('invoice.insert', ['screen' => 'pos'])}}" method="POST" class="Form" id="FormInvoiceAdd" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="ProductPriceInput"  name="product_price_input">
            <input type="hidden" id="ProductPriceOutput" name="product_price_output">
            <input type="hidden" id="ProductQuantity" name="product_quantity">
            <input type="hidden" id="CustomerId" name="customer_id">

            <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="CustomerName">Khách hàng <span class="RequiredSymbol">*</span></label>
                    <input autocomplete="off" class="FormInput" id="CustomerName" type="text" name="customer_name" data-modal-action="toggle" data-modal-target="#CustomerSearchModal">
                    <small class="FormErrorMessage"></small>
                </div>

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductType" >Mặt hàng <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="product_id" id="ProductType">
                            <option value="">-- Chọn mặt hàng --</option>
                            @foreach( $products as $product )
                                <option 
                                    data-product_price_input="{{$product->product_price_input}}"
                                    data-product_price_output="{{$product->product_price_output}}"
                                    data-product_quantity="{{$product->product_quantity}}"
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

            <div class="FormGrid FormGrid_DesktopTwo">

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
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

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
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

    <!-- Customer Search Modal -->
    <div class="CustomerSearch" id="CustomerSearch">
        <div class="CustomerSearchModal" id="CustomerSearchModal">
            <div class="CustomerSearchBox">
                <div class="CustomerSearchForm">
                    <svg class="CustomerSearchForm_Icon" viewBox="0 0 20 20" aria-hidden="true"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <input class="CustomerSearchForm_Input" id="CustomerSearchFormInput" type="text" placeholder="Tìm tên khách hàng">
                    <button id="CustomerSearchForm_Reset" title="Clear the query" class="CustomerSearchForm_Reset" aria-label="Clear the query"><svg width="20" height="20" viewBox="0 0 20 20"><path d="M10 10l5.09-5.09L10 10l5.09 5.09L10 10zm0 0L4.91 4.91 10 10l-5.09 5.09L10 10z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
                </div>
                
                <div class="CustomerSearchResult" id="CustomerSearchResult">
                    <p class="CustomerSearchResult_No">Không có kết quả!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Customer Search Modal -->
@endsection


