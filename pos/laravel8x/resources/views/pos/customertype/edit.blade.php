@extends('pos.layouts.cover')
@section('title', 'SỬA SẢN PHẨM')
@section('pagejs', asset('pos/js/stringtype/edit.js'))
@section('main')
    <main class="Main">
        <form action="{{route('stringtype.update', $stringtype->stringtype_id)}}" method="POST" class="Form" id="FormstringtypeEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringtypeName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="stringtypeName" type="text" name="stringtype_name" value="{{$stringtype->stringtype_name}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringtypestringtype" >Danh mục cha</label>
                        <select class="FormSelect" name="stringtype_parent_id" id="stringtypestringtype">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($stringtypes as $item)
                                <option value="{{$item->stringtype_id}}" {{ ($stringtype->stringtype_parent_id == $item->stringtype_id) ? 'selected' : ''; }}>{{$item->stringtype_name}}</option>
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
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('stringtype.delete', $stringtype->stringtype_id)}}" >Xóa sản phẩm</a>
                </div>
            </div>
        </form>
    </main>
    <!-- End Main -->
@endsection
