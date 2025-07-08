@extends('pos.layouts.cover')
@section('Title', 'THÊM ĐƠN HÀNG')
@section('PageJs', asset('pos/js/productorder/add.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('productorder.insert', ['screen' => 'pos'])}}" method="POST" class="Form" id="FormProductorderAdd" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="ProductPriceInput"  name="product_price_input">
            <input type="hidden" id="ProductPriceOutput" name="product_price_output">

            <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="CustomerId" >Khách hàng <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="customer_id" id="CustomerId">
                        @foreach( $customers as $customer )
                            <option value="{{$customer->customer_id}}">{{$customer->customergroup_name}} - {{$customer->customer_name}}</option>
                        @endforeach
                    </select>
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
                                    value="{{$product->product_id}}"
                                >{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductorderQuantity">Số lượng <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductorderQuantity" type="number" name="productorder_quantity">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
            </div>

            <div class="FormGrid FormGrid_DesktopTwo">

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductorderDiscount">Chiết khấu (VNĐ)</label>
                        <input class="FormInput" id="ProductorderDiscount" type="number" name="productorder_discount">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductorderStatus" >Trạng thái <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="productorder_status" id="ProductorderStatus">
                            @foreach( productorderStatus() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductorderIspayment" >Trạng thái thanh toán <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="productorder_ispayment" id="ProductorderIspayment">
                            @foreach( commomIspayment() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductorderDescription" >Ghi chú</label>
                        <input class="FormInput" id="ProductorderDescription" type="text" name="productorder_description">
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


