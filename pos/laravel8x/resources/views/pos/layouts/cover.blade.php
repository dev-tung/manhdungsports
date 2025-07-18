<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="CsrfToken"/>
    <meta name="description" content="{{ route('api.file.upload') }}" id="apiFileUpload"/>
    <meta name="description" content="{{ route('api.customer.get') }}" id="apiCustomerGet"/>
    <meta name="description" content="{{ route('api.product.get') }}" id="apiProductGet"/>
    <meta name="description" content="{{ route('api.file.move') }}" id="apiFileMove"/>
    <meta name="description" content="{{ route('api.invoice.status') }}" id="apiInvoiceStatus"/>
    <meta name="description" content="{{ route('api.invoice.ispayment') }}" id="apiInvoiceIspayment"/>

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
                <p class="TopbarPageTitle">@yield('Title')</p>
            </div>
            <div class="TopbarNav">
                <nav class="TopbarNav_Left">
                    <a class="TopbarNavLink" href="{{route('product.add', ['screen'=>'pos'])}}">
                        <span class="TopbarNavText">Thêm sản phẩm</span> 
                    </a>
                    <a class="TopbarNavLink" href="{{route('customer.add', ['screen'=>'pos'])}}">
                        <span class="TopbarNavText">Thêm khách hàng</span> 
                    </a>
                    <a class="TopbarNavLink" href="{{route('expense.add', ['screen'=>'pos'])}}">
                        <span class="TopbarNavText">Thêm chi phí</span> 
                    </a>
                    <a class="TopbarNavLink" href="{{route('invoice.add', ['screen'=>'pos'])}}">
                        <span class="TopbarNavText">Thêm đơn hàng</span> 
                    </a>
                </nav>
                <div class="TopbarNav_right">
                    
                </div>
            </div>
            
        </div>
        <!-- End Topbar -->
         
        @include('pos.layouts.sidebar')
        <!-- End Sidebar -->

        @yield('Main')
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
    @yield('Script')
    <script src="@yield('PageJs')"></script>
</body>
</html>