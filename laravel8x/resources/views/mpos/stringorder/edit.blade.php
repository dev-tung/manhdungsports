@extends('pos.layouts.cover')
@section('Title', 'THÊM Các loại cước')
@section('pagejs', asset('pos/js/stringorder/edit.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('stringorder.update', ['stringorder_id' => $stringorder->stringorder_id])}}" method="POST" class="Form" id="FormStringEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="CustomerId" >Khách hàng <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="customer_id" id="CustomerId">
                        @foreach( $customers as $customer )
                            <option value="{{$customer->customer_id}}" {{ ($customer->customer_id == $stringorder->customer_id) ? 'selected' : ''; }}>{{$customer->customergroup_name}} - {{$customer->customer_name}}</option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="StringType" >Các loại cước <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="string_id" id="StringType">
                        <option value="">-- Chọn Các loại cước --</option>
                        @foreach( $strings as $string )
                            <option value="{{$string->string_id}}" {{ ($string->string_id == $stringorder->string_id) ? 'selected' : ''; }}>[{{ stringGetType($string->string_type) }}] {{ $string->string_name }} - {{ stringGetColor($string->string_color) }}</option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
            </div>
            <div class="FormGrid FormGridDesktop_Two">
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderStatus" >Trạng thái <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringorder_status" id="StringorderStatus">
                            @foreach( stringorderStatus() as $key => $item )
                                <option value="{{$key}}" {{ ($key == $stringorder->stringorder_status) ? 'selected' : ''; }}>{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderKG" >KG <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringorderKG" type="text" name="stringorder_kg" value="{{$stringorder->stringorder_kg}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup">
                        <label class="FormLabel" for="StringorderDiscount">Chiết khấu (VNĐ)</label>
                        <input class="FormInput" id="StringorderDiscount" type="number" name="stringorder_discount" value="{{$stringorder->stringorder_discount}}">
                    </div>
                    <div class="FormGroup">
                        <label class="FormLabel" for="StringorderTimereturn" >Thời gian trả vợt</label>
                        <input class="FormInput" id="StringorderTimereturn" type="text" name="stringorder_timereturn" value="{{$stringorder->stringorder_timereturn}}">
                    </div>
                </div>
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderIspayment" >Trạng thái thanh toán <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringorder_ispayment" id="StringorderIspayment">
                            @foreach( commomIspayment() as $key => $item )
                                 <option value="{{$key}}" {{ ($key == $stringorder->stringorder_ispayment) ? 'selected' : ''; }}>{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderGen" >Thay ghen <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringorder_gen" id="StringorderGen">
                            @foreach( commomYesNoOption() as $key => $item )
                                <option value="{{$key}}" {{ ($key == $stringorder->stringorder_gen) ? 'selected' : ''; }}>{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup">
                        <label class="FormLabel" for="StringorderDescription" >Ghi chú</label>
                        <input class="FormInput" id="StringorderDescription" type="text" name="stringorder_description" value="{{$stringorder->stringorder_description}}">
                    </div>
                </div>
            </div>

            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('stringorder.delete', ['stringorder_id' => $stringorder->stringorder_id])}}" >Xóa</a>
                </div>
            </div>
        </form>
        
    </main>
    <!-- End Main -->
     


@endsection


