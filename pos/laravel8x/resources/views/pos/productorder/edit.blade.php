@extends('pos.layouts.cover')
@section('title', 'THÊM ĐƠN HÀNG')
@section('pagejs', asset('pos/js/productorder/edit.js'))
@section('main')
    <main class="Main">
        <form action="{{route('productorder.update', $productorder->productorder_id)}}" method="POST" class="Form" id="FormProductEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="CustomerId" >Khách hàng <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="customer_id" id="CustomerId">
                        @foreach( $customers as $customer )
                            <option value="{{$customer->customer_id}}" {{ ($customer->customer_id == $productorder->customer_id) ? 'selected' : ''; }}>{{$customer->customergroup_name}} - {{$customer->customer_name}}</option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="ProductType" >Mặt hàng <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="product_id" id="ProductType">
                        <option value="">-- Chọn mặt hàng --</option>
                        @foreach( $products as $product )
                            <option value="{{$product->product_id}}" {{ ($product->product_id == $productorder->product_id) ? 'selected' : ''; }}>{{ $product->product_name }}</option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
            </div>
            <div class="FormGrid FormGrid_DesktopTwo">
                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup">
                        <label class="FormLabel" for="ProductorderDiscount">Chiết khấu (VNĐ)</label>
                        <input class="FormInput" id="ProductorderDiscount" type="number" name="productorder_discount" value="{{$productorder->productorder_discount}}">
                    </div>
                    <div class="FormGroup">
                        <label class="FormLabel" for="ProductorderTimereturn" >Thời gian giao hàng</label>
                        <input class="FormInput" id="ProductorderTimereturn" type="text" name="productorder_timereturn" value="{{$productorder->productorder_timereturn}}">
                    </div>
                </div>

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductorderIspayment" >Trạng thái thanh toán <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="productorder_ispayment" id="ProductorderIspayment">
                            @foreach( commomGetOrderIspayment() as $key => $item )
                                 <option value="{{$key}}" {{ ($key == $productorder->productorder_ispayment) ? 'selected' : ''; }}>{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup">
                        <label class="FormLabel" for="ProductorderDescription" >Ghi chú</label>
                        <input class="FormInput" id="ProductorderDescription" type="text" name="productorder_description" value="{{$productorder->productorder_description}}">
                    </div>
                </div>
            </div>

            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('productorder.delete', $productorder->productorder_id)}}" >Xóa</a>
                </div>
            </div>
        </form>
        
    </main>
    <!-- End Main -->
     


@endsection


