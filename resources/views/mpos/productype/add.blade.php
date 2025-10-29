@extends('pos.layouts.cover')
@section('Title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/productype/add.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('productype.insert')}}" method="POST" class="Form" id="FormproductypeAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="productypeName" >Tên danh mục <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="productypeName" type="text" name="productype_name">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="productypeproductype" >Danh mục cha</label>
                        <select class="FormSelect" name="productype_parent_id" id="productypeproductype">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($productype as $item)
                                <option value="{{$item->productype_id}}">{{$item->productype_name}}</option>
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


