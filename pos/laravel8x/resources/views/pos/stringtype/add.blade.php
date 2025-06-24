@extends('pos.layouts.cover')
@section('title', 'THÊM LOẠI CƯỚC')
@section('pagejs', asset('pos/js/string/add.js'))
@section('main')
    <main class="Main">
        <form action="{{route('string.insert')}}" method="POST" class="Form" id="FormStringAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid FormGrid_DesktopTwo">
                <div class="FormGroup FormValidate">
                    <label class="FormLabel" for="StringName" >Tên loại cước <span class="RequiredSymbol">*</span></label>
                    <input class="FormInput" id="StringName" type="text" name="string_name">
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringPriceInput" >Giá nhập <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringPriceInput" type="number" name="string_price_input">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductPriceOutput" >Giá bán <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductPriceOutput" type="number" name="product_price_output">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>
            </div>

            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringName" >Tên loại cước <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="stringName" type="text" name="string_name">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringstring" >Màu sắc</label>
                        <select class="FormSelect" name="string_parent_id" id="stringstring">
                            <option value="">-- Chọn màu sắc --</option>
                            @foreach($color as $key => $item)
                                <option value="{{$key}}">{{$item}}</option>
                            @endforeach
                        </select>
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


