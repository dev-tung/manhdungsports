@extends('pos.layouts.cover')
@section('Title', 'SỬA SẢN PHẨM')
@section('pagejs', asset('pos/js/product/edit.js'))
@section('Main')
    <main class="Main">
        <form action="{{route('product.update', $product->product_id)}}" method="POST" class="Form" id="FormProductEdit" enctype="multipart/form-data">
            @csrf
            <div class="FormGrid">
                <div class="FormValidate">
                    <div class="FormthumbnailGroup">
                        <button class="FormthumbnailItem FormthumbnailItem_EditBtn" id="FormthumbnailEditBtn">
                            <svg class="FormThumbnailIcon" viewBox="-9 -4 49 50" xmlns="http://www.w3.org/2000/svg">
                                <!-- Khung hình ảnh -->
                                <rect x="0" y="8" width="30" height="28" rx="2" ry="2" fill="#e0e0e0" stroke="#555" stroke-width="1"/>

                                <!-- Mặt trời -->
                                <circle cx="10" cy="18" r="2.5" fill="#777" />

                                <!-- Núi -->
                                <polyline points="5,34 12,25 18,31 24,26 30,34" fill="none" stroke="#555" stroke-width="1" />
                            </svg>
                        </button>

                        @if( !empty($product->product_thumbnail) )
                            <a class="FormthumbnailItem" id="FormthumbnailDisplayLink" href="{{asset($product->product_thumbnail)}}">
                                <img class="FormthumbnailDisplayImg" id="FormthumbnailDisplayImg" src="{{asset($product->product_thumbnail)}}">
                            </a>
                        @endif

                        <input type="file" id="ProductThumbnail" hidden>
                        <input type="hidden" id="ProductThumbnailValue" name="product_thumbnail" value="{{$product->product_thumbnail}}">
                    </div>
                    <small class="FormErrorMessage"></small>
                </div>
                <div class="FormGrid FormGridDesktop_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductName" >Tên sản phẩm <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductName" type="text" name="product_name" value="{{$product->product_name}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGrid FormGridMobile_Two FormGridDesktop_Two">
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="ProductPriceInput" >Giá nhập <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="ProductPriceInput" type="number" name="product_price_input" value="{{$product->product_price_input}}">
                            <small class="FormErrorMessage"></small>
                        </div>
                        <div class="FormGroup FormValidate">
                            <label class="FormLabel" for="ProductPriceOutput" >Giá bán <span class="RequiredSymbol">*</span></label>
                            <input class="FormInput" id="ProductPriceOutput" type="number" name="product_price_output" value="{{$product->product_price_output}}">
                            <small class="FormErrorMessage"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="FormGrid FormGridDesktop_Two">
                <div class="FormGrid FormGridDesktop_Two FormGridMobile_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductQuantity" >Số lượng <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductQuantity" type="number" name="product_quantity" value="{{$product->product_quantity}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductUnit" >Đơn vị tính <span class="RequiredSymbol">*</span></label>
                        <input class="FormInput" id="ProductUnit" type="text" name="product_unit" value="{{$product->product_unit}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>

                <div class="FormGrid FormGridDesktop_Two FormGridMobile_Two">
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="ProductType" >Loại sản phẩm <span class="RequiredSymbol">*</span></label>
                        <select class="FormSelect" name="productype_id" id="ProductType">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($productype as $item)
                                <option value="{{$item->productype_id}}" {{ ($product->productype_id == $item->productype_id) ? 'selected' : ''; }}>{{$item->productype_name}}</option>
                            @endforeach
                        </select>
                        <small class="FormErrorMessage"></small>
                    </div>
                    <div class="FormGroup FormValidate">
                        <label class="FormLabel" for="Productource" >Nhà cung cấp </label>
                        <input class="FormInput" id="Productource" type="text" name="Productource" value="{{$product->product_source}}">
                        <small class="FormErrorMessage"></small>
                    </div>
                </div>


            </div>
            <div class="FormGroup">
                <label class="FormLabel" for="ProductDescription" >Ghi chú</label>
                <textarea class="FormTexarea" rows="3" name="product_description" id="ProductDescription">{{$product->product_description}}</textarea>
            </div>

            <div class="FormBtn">
                <div class="FormBtnGroup">
                    <button class="Btn Btn_Default" type="button" onclick="history.back()">Quay lại</button>
                    <button class="Btn Btn_Primary">Lưu</button>
                </div>
                <div class="FormBtnGroup">
                    <a class="Btn Btn_Danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('product.delete', $product->product_id)}}" >Xóa sản phẩm</a>
                </div>
            </div>
        </form>
    </main>
    <!-- End Main -->
@endsection
