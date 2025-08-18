@extends('pos.layouts.cover')
@section('Title', 'THÊM CƯỚC')
@section('pagejs', asset('pos/js/string/edit.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('string.update', ['string_id' => $string->string_id] )}}" method="POST" class="Form" id="FormStringEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringName" >Tên cước <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringName" type="text" name="string_name" value="{{$string->string_name}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGrid FormGridDesktop_Two">
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="StringType" >Các loại cước <span class="RequiredSymbol">*</span></label>
                            <select class="FormSelect" name="string_type" id="StringType">
                                @foreach($stringtypes as $key => $item)
                                    <option value="{{$key}}" {{ ($string->string_type == $key) ? 'selected' : ''; }}>{{$item}}</option>
                                @endforeach
                            </select>
                            <small class="FormErrorMessage"></small>
                        </div>
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="StringColor" >Màu sắc <span class="RequiredSymbol">*</span></label>
                            <select class="FormSelect" name="string_color" id="StringColor">
                                @foreach($colors as $key => $item)
                                    <option value="{{$key}}" {{ ($string->string_color == $key) ? 'selected' : ''; }}>{{$item}}</option>
                                @endforeach
                            </select>
                            <small class="FormErrorMessage"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="FormGrid FormGridDesktop_Two">
                <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringPriceInput" >Giá nhập <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringPriceInput" type="number" name="string_price_input" value="{{$string->string_price_input}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringPriceOutput" >Giá căng <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringPriceOutput" type="number" name="string_price_output" value="{{$string->string_price_output}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
                <div class="FormGroup">
                    <label class="FormLabel" for="StringDescription" >Ghi chú</label>
                    <input class="FormInput" id="StringDescription" type="text" name="string_description" value="{{$string->string_description}}">
                </div>
            </div>
            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('string.delete', ['string_id' => $string->string_id])}}" >Xóa</a>
                </div>
            </div>
        </form>
        
    </main>
    <!-- End Main -->
     


@endsection


