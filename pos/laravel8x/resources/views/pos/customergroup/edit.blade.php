@extends('pos.layouts.cover')
@section('Title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/customergroup/edit.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('customergroup.update', $customergroup->customergroup_id)}}" method="POST" class="Form" id="FormCustomergroupEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="CustomergroupName" >Nhóm khách hàng <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="CustomergroupName" type="text" name="customergroup_name" value="{{$customergroup->customergroup_name}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="customergroupDescription" >Mô tả</label>
                        <input class="FormInput" id="customergroupDescription" type="text" name="customergroup_description" value="{{$customergroup->customergroup_description}}">
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


