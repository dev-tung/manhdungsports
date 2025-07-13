@extends('pos.layouts.cover')
@section('Title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/customer/edit.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('customer.update', $customer->customer_id)}}" method="POST" class="Form" id="FormCustomerEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGridDesktop_Two">
                    <div class="FormGrid FormGridDesktop_Two FormGridMobile_Two">
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="CustomerName" >Tên khách hàng <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="CustomerName" type="text" name="customer_name" value="{{$customer->customer_name}}">
                            <small class="FormErrorMessage"></small>
                        </div>
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="Customergroup" >Nhóm khách hàng <span class="RequiredSymbol">*</span></label>
                            <select class="FormSelect" name="customergroup_id" id="Customergroup">
                                <option value="">-- Chọn danh mục --</option>
                                @foreach($customergroup as $item)
                                    <option value="{{$item->customergroup_id}}" {{ ($customer->customergroup_id == $item->customergroup_id) ? 'selected' : ''; }}>{{$item->customergroup_name}}</option>
                                @endforeach
                            </select>
                            <small class="FormErrorMessage"></small>
                        </div>
                    </div>
                    <div class="FormGrid FormGridDesktop_Two FormGridMobile_Two">
                        <div class="FormGroup">
                            <label class="FormLabel" for="CustomerPhone" >Số điện thoại</label>
                            <input class="FormInput" id="CustomerPhone" type="text" name="customer_phone" value="{{$customer->customer_phone}}">
                        </div>
                        <div class="FormGroup">
                            <label class="FormLabel" for="CustomerDescription" >Ghi chú</label>
                            <input class="FormInput" id="CustomerDescription" type="text" name="customer_description" value="{{$customer->customer_description}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="FormGroup">
                <label class="FormLabel" for="CustomerAddress" >Địa chỉ</label>
                <textarea class="FormTexarea" rows="2" name="customer_address" id="CustomerAddress">{{$customer->customer_description}}</textarea>
            </div>

            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('customer.delete', $customer->customer_id)}}" >Xóa khách hàng</a>
                </div>
            </div>
        </form>
        
    </main>
    <!-- End Main -->
     


@endsection


