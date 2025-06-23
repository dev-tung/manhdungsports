@extends('pos.layouts.cover')
@section('title', 'SỬA SẢN PHẨM')
@section('pagejs', asset('pos/js/category/edit.js'))
@section('main')
    <main class="Main">
        <form action="{{route('category.update', $category->category_id)}}" method="POST" class="Form" id="FormCategoryEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="CategoryName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="CategoryName" type="text" name="category_name" value="{{$category->category_name}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="CategoryCategory" >Danh mục cha</label>
                        <select class="FormSelect" name="category_parent_id" id="CategoryCategory">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($categories as $item)
                                <option value="{{$item->category_id}}" {{ ($category->category_parent_id == $item->category_id) ? 'selected' : ''; }}>{{$item->category_name}}</option>
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
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('category.delete', $category->category_id)}}" >Xóa sản phẩm</a>
                </div>
            </div>
        </form>
    </main>
    <!-- End Main -->
@endsection
