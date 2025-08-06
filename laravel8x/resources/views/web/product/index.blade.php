@extends('web.layouts.cover')
@section('Main')
        <div class="Breadcrumb">
            <div class="PageWidth">
                <h3 class="BreadCrumbTitle">
                    @if( !empty(request()->productype_code) )
                        {{ $productypes[request()->productype_code] }}
                    @else
                        Danh sách sản phẩm
                    @endif
                </h3>
            </div>
        </div>

        <div class="PageWidth">
            <div class="ProductGrid">
                @foreach( $products as $key => $product )
                    <div class="ProductItem">
                        <div class="ProductGroup">
                            <a class="ProductThumnail" href="{{ asset($product->product_thumbnail)}}">
                                <img class="ProductImg" src="{{ asset($product->product_thumbnail)}}">
                            </a>
                            <h3 class="ProductTitle">{{$product->product_name}}</h3>
                            <div class="ProductPrice">
                                <span class="ProductPriceSale">{{commonNumberToVND($product->product_price_output)}}</span>
                            </div>
                            <a class="ProductBtnView" href="{{route('web.product.detail', ['product_id' => $product->product_id])}}">
                                xem chi tiết
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> <!-- End PageWidth -->


@endsection