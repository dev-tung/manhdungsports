@extends('pos.layouts.cover')
@section('Title', 'BẢNG GIÁ CĂNG CƯỚC')
@section('PageJs', asset('pos/js/string/table.js'))
@section('Main')
    <main class="Main">
        <div class="MainContent">
            <button class="Btn Btn_Warning" id="DownloadStringTable">Download Bảng Giá</button>
            <div class="TableString" id="TableString">
                <div class="TableStringHeader">
                    <img src="{{asset('pos/img/stringtitle.png')}}" width="350">
                </div>
                <div class="TableStringGrid">
                    @foreach( $string as $string )
                        <div class="TableStringItem">
                            <div class="TableStringName">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/>
                                </svg>
                                <h3>{{stringDisplayName($string)}}</h3>
                            </div>
                            <div class="TableStringPrice">{{ commonNumberToVND($string->product_price_output) }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <!-- End Main -->
@endsection

@section('Script')
    <script src="{{asset('js/html2canvas.min.js')}}"></script>
@endsection