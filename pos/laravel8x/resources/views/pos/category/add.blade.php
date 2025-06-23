@extends('pos.layouts.cover')
@section('title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/category/add.js'))
@section('main')
    <main class="Main">
        <form action="{{route('category.insert')}}" method="POST" class="Form" id="FormCategoryAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="CategoryName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="CategoryName" type="text" name="category_name">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="CategoryCategory" >Danh mục cha</label>
                        <select class="FormSelect" name="category_parent_id" id="CategoryCategory">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($categories as $item)
                                <option value="{{$item->category_id}}">{{$item->category_name}}</option>
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


