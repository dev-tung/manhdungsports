<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="CsrfToken"/>
    <meta name="csrf-token" content="{{ route('api.file.upload') }}" id="api_file_upload"/>
    <meta name="csrf-token" content="{{ route('api.file.move') }}" id="api_file_move"/>

    <title>MANH DUNG POS | Product</title>
    <link rel="stylesheet" href="{{asset('pos/font/font-roboto.css')}}" >
    <link rel="stylesheet" href="{{asset('pos/css/style.css')}}" >
</head>
<body>
    <div class="App" id="App">
        <div class="Topbar">
            <div class="TopbarPage" id="TopbarPage">
                <svg class="Icon_Border TopbarToggleIcon w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="3" d="M12 6h.01M12 12h.01M12 18h.01"/>
                </svg>
                <p class="TopbarPageTitle">@yield('title')</p>
            </div>
        </div>
        <!-- End Topbar -->
         
        @include('pos.layouts.sidebar')
        <!-- End Sidebar -->

        @yield('main')
    </div>
    <!-- End App -->

    <!-- Modal loading page -->
    <div class="Modal" id="ModalLoading">
        <div class="ModalOverlay"></div>
        <div class="ModalContent">
            <div class="ModalLoading">
                <div class="ModalLoadingIcon"></div>
                <div class="ModalLoadingText">Đang xử lý ...</div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/function.js')}}"></script>
    <script src="{{asset('js/validator.js')}}"></script>
    <script src="{{asset('pos/js/cover.js')}}"></script>
    <script src="@yield('pagejs')"></script>
</body>
</html>