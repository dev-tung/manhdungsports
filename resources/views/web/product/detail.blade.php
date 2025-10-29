@extends('web.layouts.cover')
@section('Main')
    <div class="PageWidth">
        <div class="ProductDetail">
            <div class="ProductDetailLeft">
                <div class="swiper ProductFeaturedslide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset($product->product_thumbnail)}}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="ProductDetailRight">
                <h1 class="ProductDetailTitle">{{$product->product_name}}</h1>
                <div class="ProductDetailPrice">
                    <span class="ProductDetailPriceSale">Giá bán {{commonNumberToVND($product->product_price_output)}}</span>
                </div>
                <div class="ProductDetailSummary">
                    <div class="ProductDetailSummary">
                        <div class="ProductDetailSummaryItem">Liên hệ mua hàng SĐT 0973359165</div>
                    </div>
                </div>
            </div>
        </div> <!-- End product detail -->
        <div class="ProductDescription">
            <h1 class="ProductDescriptionTitle">MÔ TẢ SẢN PHẨM</h1>
            <div>{{$product->product_description}}</div>
        </div>
    </div> <!-- End page-width -->
@endsection