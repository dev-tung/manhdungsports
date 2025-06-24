@extends('pos.layouts.cover')
@section('title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/string/add.js'))
@section('main')
    <main class="Main">
        <form action="{{route('string.insert')}}" method="POST" class="Form" id="FormStringAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="stringName" type="text" name="string_name">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringstring" >Danh mục cha</label>
                        <select class="FormSelect" name="string_parent_id" id="stringstring">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($string as $item)
                                <option value="{{$item->string_id}}">{{$item->string_name}}</option>
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


