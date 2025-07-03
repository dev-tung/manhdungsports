@extends('pos.layouts.cover')
@section('Title', 'THÊM Các loại cước')
@section('PageJs', asset('pos/js/stringorder/add.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('stringorder.insert', ['screen' => 'pos'])}}" method="POST" class="Form" id="FormStringorderAdd" enctype="multipart/form-data">
            @csrf

            <input type="hidden" id="StringPriceInput"  name="string_price_input">
            <input type="hidden" id="StringPriceOutput" name="string_price_output">
            <input type="hidden" id="StringorderType" name="string_type">

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
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="StringType" >Các loại cước <span class="RequiredSymbol">*</span></label>
                    <select class="FormSelect" name="string_id" id="StringType">
                        <option value="">-- Chọn Các loại cước --</option>
                        @foreach( $strings as $string )
                            <option 
                                value="{{$string->string_id}}" 
                                data-string_price_input="{{$string->string_price_input}}"
                                data-string_price_output="{{$string->string_price_output}}"
                                data-string_type="{{$string->string_type}}"
                            >
                                {{stringDisplayName($string)}}
                            </option>
                        @endforeach
                    </select>
                    <small class="FormErrorMessage"></small>
                </div>
            </div>

            <div class="FormGrid FormGrid_DesktopTwo">
                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderStatus" >Trạng thái <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringorder_status" id="StringorderStatus">
                            @foreach( stringorderStatus() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderKG" >KG <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringorderKG" type="text" name="stringorder_kg">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup">
                        <label class="FormLabel" for="StringorderDiscount">Chiết khấu (VNĐ)</label>
                        <input class="FormInput" id="StringorderDiscount" type="number" name="stringorder_discount">
                    </div>
                    <div class="FormGroup">
                        <label class="FormLabel" for="StringorderTimereturn" >Thời gian trả vợt</label>
                        <input class="FormInput" id="StringorderTimereturn" type="text" name="stringorder_timereturn" value="Trực tiếp">
                    </div>
                </div>

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderIspayment" >Trạng thái thanh toán <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringorder_ispayment" id="StringorderIspayment">
                            @foreach( commomIspayment() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderGen" >Thay ghen <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringorder_gen" id="StringorderGen">
                            @foreach( commomYesNoOption() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>

                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringorderWelding" >Hàn <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringorder_is_welding" id="StringorderWelding">
                            @foreach( commomYesNoOption() as $key => $item )
                                <option value="{{$key}}">{!!$item!!}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup">
                        <label class="FormLabel" for="StringorderDescription" >Ghi chú</label>
                        <input class="FormInput" id="StringorderDescription" type="text" name="stringorder_description">
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


