@extends('pos.layouts.cover')
@section('title', 'THÊM SẢN PHẨM')
@section('pagejs', asset('pos/js/product/add.js'))
@section('main')
    <main class="Main">
        <form action="{{route('product.create')}}" method="POST" class="Form" id="FormProductAdd" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormValidate">
                    <div class="FormthumbnailGroup">
                        <button class="FormthumbnailItem FormthumbnailItem_AddBtn" id="FormthumbnailAddBtn">
                            <svg class="FormthumbnailAddIcon" viewBox="-9 -4 49 50" xmlns="http://www.w3.org/2000/svg">
                                <!-- Khung hình ảnh -->
                                <rect x="0" y="8" width="30" height="28" rx="2" ry="2" fill="#e0e0e0" stroke="#555" stroke-width="1"/>

                                <!-- Mặt trời -->
                                <circle cx="10" cy="18" r="2.5" fill="#777" />

                                <!-- Núi -->
                                <polyline points="5,34 12,25 18,31 24,26 30,34" fill="none" stroke="#555" stroke-width="1" />

                                
                            </svg>
                        </button>
                        <a class="FormthumbnailItem FormthumbnailItem_DisplayImg" id="FormthumbnailDisplayLink" href="{{asset('pos/img/77.png')}}">
                            <img class="FormthumbnailDisplayImg" id="FormthumbnailDisplayImg" src="{{asset('pos/img/77.png')}}">
                        </a>
                        <input type="file" id="Productthumbnail" hidden>
                        <input type="hidden" id="ProductthumbnailValue" name="product_thumbnail">
                    </div>
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGrid FormGrid_DesktopTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductName" >Tên sản phẩm <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductName" type="text" name="product_name">
                        <small class="FormErrorMessage"></small>
                    </div>
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
                </div>
            </div>
            <div class="FormGrid FormGrid_DesktopTwo">
                <div class="FormGrid FormGrid_DesktopTwo FormGrid_MobileTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductQuantity" >Số lượng <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductQuantity" type="number" name="product_quantity">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductUnit" >Đơn vị tính <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductUnit" type="text" name="product_unit">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>

                <div class="FormGrid FormGrid_DesktopTwo FormGrid_MobileTwo">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductCategory" >Loại sản phẩm <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="product_category" id="ProductCategory">
                            <option value="">-- Chọn --</option>
                            <option value="1">Vợt cầu lông</option>
                            <option value="2">Giày cầu lông</option>
                            <option value="3">Quần cầu lông</option>
                            <option value="4">Áo cầu lông</option>
                            <option value="5">Túi ngang</option>
                            <option value="6">Balo</option>
                            <option value="7">Túi hở cán</option>
                            <option value="8">Cầu</option>
                            <option value="9">Phụ kiện</option>
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductSource" >Nhà cung cấp </label>
                        <input class="FormInput" id="ProductSource" type="text" name="ProductSource">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>


            </div>
            <div class="FormGroup">
                <label class="FormLabel" for="ProductDescription" >Ghi chú</label>
                <textarea class="FormTexarea" rows="3" name="product_description" id="ProductDescription"></textarea>
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
