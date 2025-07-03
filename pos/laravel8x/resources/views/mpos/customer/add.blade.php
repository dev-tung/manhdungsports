@extends('pos.layouts.cover')
@section('title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/customer/add.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('customer.insert', ['screen' => 'pos'])}}" method="POST" class="Form" id="FormCustomerAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGrid FormGrid_DesktopTwo FormGrid_MobileTwo">
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="CustomerName" >Tên khách hàng <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="CustomerName" type="text" name="customer_name">
                            <small class="FormErrorMessage"></small>
                        </div>
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="Customergroup" >Nhóm khách hàng <span class="RequiredSymbol">*</span></label>
                            <select class="FormSelect" name="customergroup_id" id="Customergroup">
                                <option value="">-- Chọn danh mục --</option>
                                @foreach($customergroup as $item)
                                    <option value="{{$item->customergroup_id}}">{{$item->customergroup_name}}</option>
                                @endforeach
                            </select>
                            <small class="FormErrorMessage"></small>
                        </div>
                    </div>
                    <div class="FormGrid FormGrid_DesktopTwo FormGrid_MobileTwo">
                        <div class="FormGroup">
                            <label class="FormLabel" for="CustomerPhone" >Số điện thoại</label>
                            <input class="FormInput" id="CustomerPhone" type="text" name="customer_phone">
                        </div>
                        <div class="FormGroup">
                            <label class="FormLabel" for="CustomerDescription" >Ghi chú</label>
                            <input class="FormInput" id="CustomerDescription" type="text" name="customer_description">
                        </div>
                    </div>
                </div>
            </div>
            <div class="FormGroup">
                <label class="FormLabel" for="CustomerAddress" >Địa chỉ</label>
                <textarea class="FormTexarea" rows="2" name="customer_addres" id="CustomerAddress"></textarea>
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


