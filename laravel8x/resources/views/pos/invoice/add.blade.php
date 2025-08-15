@extends('pos.layouts.cover')
@section('Title', 'THÊM ĐƠN HÀNG')
@section('PageJs', asset('pos/js/invoice/add.js'))
@section('PageCss', asset('pos/css/invoice/add.css'))
@section('Script')
    <script src="{{asset('pos/js/invoice/search.js')}}"></script>
@endsection
@section('Main')
    <main class="Main">
        <form action="{{route('invoice.insert', ['screen' => 'pos'])}}" method="POST" class="Form" id="FormInvoiceAdd" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="CustomerId" name="customer_id">
            <input type="hidden" id="ProductId" name="product_id">

            <div class="FormGrid FormGridDesktop_Three">

                <!-- Khách hàng -->
                <div class="FormGroup">
                    <label for="customer" class="FormLabel">Khách hàng <span class="RequiredSymbol">*</span></label>
                    <input type="text" id="customer" class="FormInput" placeholder="Nhập tên khách hàng..." autocomplete="off">
                    <div class="Suggestions" id="customerList"></div>
                </div>

                <!-- Sản phẩm -->
                <div class="FormGroup" style="z-index: 1001;">
                    <label class="FormLabel" for="productSearchInput">Sản phẩm</label>
                    <div tabindex="0" class="ProductSelectorBtn" id="productSelectorBtn">Chọn sản phẩm</div>
                    <div class="Dropdown" id="productDropdown">
                        <input type="text" class="DropdownSearchInput" id="productSearchInput" placeholder="Nhập tên sản phẩm để tìm...">
                        <div class="SuggestionsTagsContainer" id="selectedTags"></div>
                        <div id="productItems"></div>
                    </div>
                </div>

                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="InvoiceDiscount">Chiết khấu (VNĐ)</label>
                    <input class="FormInput" id="InvoiceDiscount" type="number" name="invoice_discount" autocomplete="on">
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
                    <label class="FormLabel" for="InvoiceCreatedAt">Ngày tạo</label>
                    <input class="FormInput" id="InvoiceCreatedAt" type="date" name="invoice_created_at" value="{{date('Y-m-d')}}">
                    <small class="FormErrorMessage"></small>
                </div>
            </div>
            <div class="FormGroup FormValidate">
                <label class="FormLabel" for="InvoiceDescription" >Ghi chú</label>
                <input class="FormInput" id="InvoiceDescription" type="text" name="invoice_description">
                <small class="FormErrorMessage"></small>
            </div>
            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary" id="createInvoice">Lưu</button>
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


    <!-- Product Search Modal -->
    <div class="ProductSearch" id="ProductSearch">
        <div class="ProductSearchModal" id="ProductSearchModal">
            <div class="ProductSearchBox">
                <div class="ProductSearchForm">
                    <svg class="ProductSearchForm_Icon" viewBox="0 0 20 20" aria-hidden="true"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <input class="ProductSearchForm_Input" id="ProductSearchFormInput" type="text" placeholder="Tìm tên sản phẩm">
                    <button id="ProductSearchForm_Reset" title="Clear the query" class="ProductSearchForm_Reset" aria-label="Clear the query"><svg width="20" height="20" viewBox="0 0 20 20"><path d="M10 10l5.09-5.09L10 10l5.09 5.09L10 10zm0 0L4.91 4.91 10 10l-5.09 5.09L10 10z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
                </div>
                
                <div class="ProductSearchResult" id="ProductSearchResult">
                    <p class="ProductSearchResult_No">Không có kết quả!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Search Modal -->
@endsection


