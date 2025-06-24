@extends('pos.layouts.cover')
@section('title', 'THÊM CƯỚC')
@section('pagejs', asset('pos/js/product/add.js'))
@section('main')
    <main class="Main">
        <form action="{{route('product.insert')}}" method="POST" class="Form" id="FormProductAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductPriceInput" >Tên cước <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductPriceInput" type="number" name="product_price_input">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGrid FormGrid_DesktopTwo">
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="Productproductype" >Loại cước <span class="RequiredSymbol">*</span></label>
                            <select class="FormSelect" name="productype_id" id="Productproductype">
                                <option value="">Cước cuộn</option>
                            </select>
                            <small class="FormErrorMessage"></small>
                        </div>
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="Productproductype" >Màu sắc <span class="RequiredSymbol">*</span></label>
                            <select class="FormSelect" name="productype_id" id="Productproductype">
                                <option value="">Đỏ</option>
                            </select>
                            <small class="FormErrorMessage"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGrid FormGrid_MobileTwo FormGrid_DesktopTwo">
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="ProductPriceInput" >Giá nhập <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="ProductPriceInput" type="number" name="product_price_input">
                            <small class="FormErrorMessage"></small>
                        </div>
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="ProductPriceOutput" >Giá bán <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="ProductPriceOutput" type="number" name="product_price_output">
                            <small class="FormErrorMessage"></small>
                        </div>
                    </div>

                <div class="FormGroup">
                    <label class="FormLabel" for="ProductPriceOutput" >Ghi chú</label>
                    <input class="FormInput" id="ProductPriceOutput" type="text" name="product_price_output">
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


