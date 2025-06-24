@extends('pos.layouts.cover')
@section('title', 'SỬA SẢN PHẨM')
@section('pagejs', asset('pos/js/string/edit.js'))
@section('main')
    <main class="Main">
        <form action="{{route('string.update', $string->string_id)}}" method="POST" class="Form" id="FormStringEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormValidate">
                    <div class="FormthumbnailGroup">
                        <button class="FormthumbnailItem FormthumbnailItem_EditBtn" id="FormthumbnailEditBtn">
                            <svg class="FormThumbnailIcon" viewBox="-9 -4 49 50" xmlns="http://www.w3.org/2000/svg">
                                <!-- Khung hình ảnh -->
                                <rect x="0" y="8" width="30" height="28" rx="2" ry="2" fill="#e0e0e0" stroke="#555" stroke-width="1"/>

                                <!-- Mặt trời -->
                                <circle cx="10" cy="18" r="2.5" fill="#777" />

                                <!-- Núi -->
                                <polyline points="5,34 12,25 18,31 24,26 30,34" fill="none" stroke="#555" stroke-width="1" />
                            </svg>
                        </button>

                        @if( !empty($string->string_thumbnail) )
                            <a class="FormthumbnailItem" id="FormthumbnailDisplayLink" href="{{asset($string->string_thumbnail)}}">
                                <img class="FormthumbnailDisplayImg" id="FormthumbnailDisplayImg" src="{{asset($string->string_thumbnail)}}">
                            </a>
                        @endif

                        <input type="file" id="StringThumbnail" hidden>
                        <input type="hidden" id="StringThumbnailValue" name="string_thumbnail" value="{{$string->string_thumbnail}}">
                    </div>
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringName" >Tên sản phẩm <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringName" type="text" name="string_name" value="{{$string->string_name}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="StringPriceInput" >Giá nhập <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="StringPriceInput" type="number" name="string_price_input" value="{{$string->string_price_input}}">
                            <small class="FormErrorMessage"></small>
                        </div>
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="StringPriceOutput" >Giá bán <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="StringPriceOutput" type="number" name="string_price_output" value="{{$string->string_price_output}}">
                            <small class="FormErrorMessage"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="FormGrid FormGrid_DesktopTwo">
                <div class="FormGrid FormGrid_DesktopTwo FormGrid_MobileTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringQuantity" >Số lượng <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringQuantity" type="number" name="string_quantity" value="{{$string->string_quantity}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="StringUnit" >Đơn vị tính <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="StringUnit" type="text" name="string_unit" value="{{$string->string_unit}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>

                <div class="FormGrid FormGrid_DesktopTwo FormGrid_MobileTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="Stringstringype" >Loại sản phẩm <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="stringype_id" id="Stringstringype">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($stringype as $item)
                                <option value="{{$item->stringype_id}}" {{ ($string->stringype_id == $item->stringype_id) ? 'selected' : ''; }}>{{$item->stringype_name}}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="Stringource" >Nhà cung cấp </label>
                        <input class="FormInput" id="Stringource" type="text" name="Stringource" value="{{$string->string_source}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>


            </div>
            <div class="FormGroup">
                <label class="FormLabel" for="StringDescription" >Ghi chú</label>
                <textarea class="FormTexarea" rows="3" name="string_description" id="StringDescription">{{$string->string_description}}</textarea>
            </div>

            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('string.delete', $string->string_id)}}" >Xóa sản phẩm</a>
                </div>
            </div>
        </form>
    </main>
    <!-- End Main -->
@endsection
