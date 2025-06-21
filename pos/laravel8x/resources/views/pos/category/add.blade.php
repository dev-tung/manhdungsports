@extends('pos.layouts.cover')
@section('title', 'THÊM DANH MỤC')
@section('pagejs', asset('pos/js/category/add.js'))
@section('main')
    <main class="Main">
        <form action="{{route('category.create')}}" method="POST" class="Form" id="FormCategoryAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormValidate">
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="CategoryName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="CategoryName" type="text" name="category_name">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="CategoryCategory" >Danh mục cha <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="category_category" id="CategoryCategory">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="Vợt cầu lông">Vợt cầu lông</option>
                            <option value="Giày cầu lông">Giày cầu lông</option>
                            <option value="Quần cầu lông">Quần cầu lông</option>
                            <option value="Áo cầu lông">Áo cầu lông</option>
                            <option value="Túi ngang">Túi ngang</option>
                            <option value="Balo">Balo</option>
                            <option value="Túi hở cán">Túi hở cán</option>
                            <option value="Cầu">Cầu</option>
                            <option value="Phụ kiện">Phụ kiện</option>
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
