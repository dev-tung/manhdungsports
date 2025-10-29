@extends('pos.layouts.cover')
@section('Title', 'SẢN PHẨM')
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <div class="ListSearch">
                <form action="{{route('product.index')}}" class="ListSearchForm">
                    <input class="ListSearchFormInput" type="text" name="product_name" placeholder="Tìm kiếm sản phẩm ..." value="{{ request()->product_name }}">
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="productype_id" id="ProductType">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($productype as $item)
                                <option value="{{$item->productype_id}}" {{ (request()->productype_id == $item->productype_id) ? 'selected' : ''; }}>{{$item->productype_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="product_color" id="Color">
                            @foreach(productColor() as $key => $item)
                                <option value="{{$key}}" {{ (request()->product_color == $key) ? 'selected' : ''; }}>{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="Filter">
                        <select class="ListSearchFormSelect" name="product_size" id="ProductSize">
                            @foreach(productSize() as $key => $item)
                                <option value="{{$key}}" {{ (request()->product_size == $key) ? 'selected' : ''; }}>{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="ListSearchFormBtn" type="reset"><a href="{{route('product.index')}}">Xóa</a></button>
                    <button class="ListSearchFormBtn ListSearchFormBtn_Submit">
                        <svg class="ListSearchFormSubmitIcon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <div class="ListSearchTotal">
                <span class="ListSearchTotalItem">Tổng số lượng {{ $totalProduct }}</span>
                <span class="ListSearchTotalItem">-</span>
                <span class="ListSearchTotalItem">Tồn kho {{ commonNumberToVND( $priceTotalInput ) }}</span>
                <span class="ListSearchTotalItem">-</span>
                <span class="ListSearchTotalItem">Lợi nhuận ước tính {{ commonNumberToVND( $profitTotalEstimate ) }}</span>
            </div>

            <table>
                <thead>
                    <tr class="TableRow">
                        <th class="TableData">Ảnh</th>
                        <th class="TableData">Tên sản phẩm</th>
                        <th class="TableData">Drop</th>
                        <th class="TableData">Màu sắc</th>
                        <th class="TableData">Size</th>
                        <th class="TableData">Loại sản phẩm</th>
                        <th class="TableData">Tồn kho</th>
                        <th class="TableData">Đơn vị</th>
                        <th class="TableData">Giới tính</th>
                        <th class="TableData">Nguồn</th>
                        <th class="TableData">Giá nhập</th>
                        <th class="TableData">Giá bán</th>
                        <th class="TableData">Lợi nhuận</th>
                        <th class="TableData">Hành động</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach( $products as $key => $product )
                        <tr class="TableRow">
                            <td class="TableData TableData_Center">
                                <div class="ListItemthumbnail">
                                    @if( !empty( $product->product_thumbnail ) )
                                        <a href="{{ asset($product->product_thumbnail) }}">
                                            <img class="ListItemthumbnail" src="{{ asset($product->product_thumbnail) }}">
                                        </a>
                                    @else
                                        <svg class="ListItemthumbnail ListItemthumbnail_default" viewBox="-9 -4 49 50" xmlns="http://www.w3.org/2000/svg">
                                            <!-- Khung hình ảnh -->
                                            <rect x="0" y="8" width="30" height="28" rx="2" ry="2" fill="#e0e0e0" stroke="#555" stroke-width="1"/>

                                            <!-- Mặt trời -->
                                            <circle cx="10" cy="18" r="2.5" fill="#777" />

                                            <!-- Núi -->
                                            <polyline points="5,34 12,25 18,31 24,26 30,34" fill="none" stroke="#555" stroke-width="1" />
                                        </svg>
                                    @endif
                                </div>
                            </td>
                            <td class="TableData">{{ $product->product_name }}</td>
                            <td class="TableData">{{ commomYesNoOption($product->product_isdrop) }}</td>
                            <td class="TableData">{{ productColor($product->product_color) }}</td>
                            <td class="TableData">{{ productSize($product->product_size) }}</td>
                            <td class="TableData">{{ $product->productype_name }}</td>
                            <td class="TableData TableData_Center">{{ $product->product_quantity }}</td>
                            <td class="TableData">{{ productUnit($product->product_unit) }}</td>
                            <td class="TableData">{{ productGender($product->product_gender) }}</td>
                            <td class="TableData">{{ productSource($product->product_source) }}</td>
                            <td class="TableData">{{ commonNumberToVND($product->product_price_input) }}</td>
                            <td class="TableData">{{ commonNumberToVND($product->product_price_output) }}</td>
                            <td class="TableData">{{ productProfit($product) }}</td>
                            <td class="TableData TableData_Center">
                                <a class="TableAction TableAction_Link" href="{{route('product.edit', ['product_id' => $product->product_id])}}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <!-- End Main -->

    <div class="Float Float_BottomRight">
        <a class="Btn Btn_Success" href="{{route('product.add')}}">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
        </a>
    </div>
@endsection