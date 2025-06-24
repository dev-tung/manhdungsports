@extends('pos.layouts.cover')
@section('title', 'SỬA SẢN PHẨM')
@section('pagejs', asset('pos/js/string/edit.js'))
@section('main')
    <main class="Main">
        <form action="{{route('string.update', $string->string_id)}}" method="POST" class="Form" id="FormstringEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="stringName" type="text" name="string_name" value="{{$string->string_name}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringstring" >Danh mục cha</label>
                        <select class="FormSelect" name="string_parent_id" id="stringstring">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($strings as $item)
                                <option value="{{$item->string_id}}" {{ ($string->string_parent_id == $item->string_id) ? 'selected' : ''; }}>{{$item->string_name}}</option>
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
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('string.delete', $string->string_id)}}" >Xóa sản phẩm</a>
                </div>
            </div>
        </form>
    </main>
    <!-- End Main -->
@endsection
