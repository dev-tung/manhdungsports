@extends('pos.layouts.cover')
@section('title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/stringtype/add.js'))
@section('main')
    <main class="Main">
        <form action="{{route('stringtype.insert')}}" method="POST" class="Form" id="FormstringtypeAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringtypeName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="stringtypeName" type="text" name="stringtype_name">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="stringtypestringtype" >Danh mục cha</label>
                        <select class="FormSelect" name="stringtype_parent_id" id="stringtypestringtype">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($stringtype as $item)
                                <option value="{{$item->stringtype_id}}">{{$item->stringtype_name}}</option>
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


