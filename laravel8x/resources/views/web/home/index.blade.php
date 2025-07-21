<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>MẠNH DŨNG SPORTS CO., LTD</title>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" >
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}" >
</head>

<body>
    <div class="Web">
        <header class="Header">
            <div class="HeaderTop">
                <div class="PageWidth">
                    <ul class="HeaderTopList">
                        <li class="HeaderTopListItem">
                            CÔNG TY TNHH MẠNH DŨNG SPORTS
                        </li>
                    </ul>
                </div>
            </div>

            <div class="HeaderMiddle PageWidth">
                <div class="HeaderMiddleLogo">
                    <img src="{{asset('web/img/logo.png')}}" class="HeaderMiddleLogoImg" alt="logo">
                </div>
                <div class="HeaderMiddleSearch">
                    <form action="" class="HeaderMiddleSearchForm">
                        <input type="text" class="HeaderMiddleSearchFormInput" placeholder="Tìm kiếm các sản phẩm ...">
                        <button class="HeaderMiddleSearchFormSubmit">TÌM KIẾM</button>
                    </form>
                </div>
                <div class="HeaderMiddleRight">
                    <div class="HeaderMiddleRightItem HeaderMiddleAccount HeaderMiddleRightItem_Xl">
                        <a href="#" class="HeaderMiddleAccountLink">Tài khoản của tôi</a>
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_Sm">
                        <img class="HeaderMiddleRightIcon HeaderMiddleRightIcon_Search" src="{{ asset('web/img/icon/search.png')}}">
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_NoXl">
                        <img class="HeaderMiddleRightIcon" src="{{ asset('web/img/icon/user.png')}}">
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_Cart">
                        <img class="HeaderMiddleRightIcon HeaderMiddleRightIcon_Cart" src="{{ asset('web/img/icon/cart.png')}}">
                        <span class="HeaderMiddle-right-cart__notification">3</span>
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_Sm">
                        <img class="HeaderMiddleRightIcon HeaderMiddleRightIcon--menu" src="{{ asset('web/img/icon/bar.png')}}">
                    </div>
                </div>
            </div>

            <nav class="HeaderNav">
                <div class="PageWidth">
                    <div class="HeaderNavCategory">
                        <button class="HeaderNavCatbtn" id="HeaderNavCatbtn">
                            <img class="HeaderNavCategoryIcon" src="{{ asset('web/img/icon/category.png')}}">
                            <span class="HeaderNavCategoryText">Danh mục sản phẩm</span>
                        </button>
                    </div>
                    
                    <ul class="HeaderNavList HeaderNavList_Menu HeaderNavList_Lg">
                        <li class="HeaderNavListItem"><a class="HeaderNavLinkItem" href="">Trang chủ</a></li>
                        <li class="HeaderNavListItem"><a class="HeaderNavLinkItem" href="">Sản phẩm</a></li>
                        <li class="HeaderNavListItem"><a class="HeaderNavLinkItem" href="">Tin tức</a></li>
                        <li class="HeaderNavListItem"><a class="HeaderNavLinkItem" href="">Giới thiệu</a></li>
                        <li class="HeaderNavListItem"><a class="HeaderNavLinkItem" href="">Liên hệ</a></li>
                    </ul>

                    <ul class="HeaderNavList HeaderNavList_Freeship">
                        <li class="HeaderNavListItem">Free ship với đơn từ <span class="HeaderNavListItemValue">100.000 đ +</span></li>
                    </ul>
                </div>
            </nav>
        </Header>

        <header class="HeaderScroll" id="HeaderScroll">
            <div class="HeaderMiddle PageWidth">
                <div class="HeaderMiddleLogo">
                    <img src="{{asset('web/img/logo.png')}}" class="HeaderMiddleLogoImg" alt="logo">
                </div>
                <div class="HeaderMiddleSearch">
                    <form action="" class="HeaderMiddleSearchForm">
                        <input type="text" class="HeaderMiddleSearchFormInput" placeholder="Tìm kiếm các sản phẩm ...">
                        <button class="HeaderMiddleSearchFormSubmit">TÌM KIẾM</button>
                    </form>
                </div>
                <div class="HeaderMiddleRight">
                    <div class="HeaderMiddleRightItem HeaderMiddleAccount HeaderMiddleRightItem_Xl">
                        <a href="#" class="HeaderMiddleAccountLink">Tài khoản của tôi</a>
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_Sm">
                        <img class="HeaderMiddleRightIcon HeaderMiddleRightIcon_Search" src="{{ asset('web/img/icon/search.png')}}">
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_NoXl">
                        <img class="HeaderMiddleRightIcon" src="{{ asset('web/img/icon/user.png')}}">
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_Cart">
                        <img class="HeaderMiddleRightIcon HeaderMiddleRightIcon_Cart" src="{{ asset('web/img/icon/cart.png')}}">
                        <span class="HeaderMiddle-right-cart__notification">3</span>
                    </div>
                    <div class="HeaderMiddleRightItem HeaderMiddleRightItem_Sm">
                        <img class="HeaderMiddleRightIcon HeaderMiddleRightIcon--menu" src="{{ asset('web/img/icon/bar.png')}}">
                    </div>
                </div>
            </div>
        </Header>

        <div class="PageWidth">
            <section class="SectionSlide">
                <div class="SlideMain swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide SlideMainItem">
                            <img class="SlideMainImg" src="{{ asset('web/img/stringtable.png')}}">
                            <!-- <div class="SlideMainGroup">
                                <p class="SlideMainSale">Sale 50%</p>
                                <h3 class="SlideMainTitle">
                                    Chăm sóc da tự nhiên
                                </h3>
                                <p class="SlideMainDesc">Nguyên liệu nhập ngoại</p>
                                <button class="SlideMainBtnView">
                                    xem chi tiết
                                </button>
                            </div> -->
                        </div>
                        <div class="swiper-slide SlideMainItem">
                            <img class="SlideMainImg" src="{{ asset('web/img/stringtable.png')}}">
                            <!-- <div class="SlideMainGroup">
                                <p class="SlideMainSale">Sale 50%</p>
                                <h3 class="SlideMainTitle">
                                    Chăm sóc da tự nhiên
                                </h3>
                                <p class="SlideMainDesc">Nguyên liệu nhập ngoại</p>
                                <button class="SlideMainBtnView">
                                    xem chi tiết
                                </button>
                            </div> -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </section> <!-- End slider -->

            <section class="SectionBrand">
                <div class="BrandLatest swiper">
                    <div class="swiper-wrapper BrandGrid">
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/slide/slide01.jpg')}}">
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide BrandItem">
                            <div class="BrandItemGroup">
                                <div class="BrandItemThumnail">
                                    <img class="BrandImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section> <!-- End brand -->
        
            <section class="SectionProduct">
                <div class="ProductLatest swiper">
                    <div class="ProductHeader">
                        <h3 class="ProductHeaderTitle">
                            Sản phẩm mới nhất
                        </h3>  
                        <div class="ProductHeaderNav">
                            <img src="{{ asset('web/img/icon/previous.png') }}" class="ProductHeaderNavBtn ProductHeaderNavBtn_Next">
                            <img src="{{ asset('web/img/icon/next.png') }}" class="ProductHeaderNavBtn ProductHeaderNavBtn_Prev">
                        </div>
                    </div>
                
                    <div class="swiper-wrapper ProductGrid">
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/slide/slide01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                            
                        </div>
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide ProductItem">
                            <span class="ProductSale">-16%</span>
                            <div class="ProductGroup">
                                <div class="ProductThumnail">
                                    <img class="ProductImg" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="ProductTitle">Lorem ipsum dolor sit amet.</h3>
                                <div class="ProductPrice">
                                    <del class="ProductPriceOrigin">120.000 đ</del>
                                    <span class="ProductPriceSale">170.000 đ</span>
                                </div>
                                <button class="ProductBtnView">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section> <!-- End product -->

            <section class="SectionBanner">
                <div class="BannerItem">
                    <img class="BannerImg" src="{{ asset('web/img/slide/slide01.jpg')}}">
                    <div class="BannerGroup">
                        <p class="BannerSale">Sale 50%</p>
                        <h3 class="BannerTitle">
                            Chăm sóc da tự nhiên
                        </h3>
                        <button class="BannerBtnView">
                            xem chi tiết
                        </button>
                    </div>
                </div>
                <div class="BannerItem">
                    <img class="BannerImg" src="{{ asset('web/img/slide/slide01.jpg')}}">
                    <div class="BannerGroup">
                        <p class="BannerSale">Sale 50%</p>
                        <h3 class="BannerTitle">
                            Chăm sóc da tự nhiên
                        </h3>
                        <button class="BannerBtnView">
                            xem chi tiết
                        </button>
                    </div>
                </div>
                <div class="BannerItem">
                    <img class="BannerImg" src="{{ asset('web/img/slide/slide01.jpg')}}">
                    <div class="BannerGroup">
                        <p class="BannerSale">Sale 50%</p>
                        <h3 class="BannerTitle">
                            Chăm sóc da tự nhiên
                        </h3>
                        <button class="BannerBtnView">
                            xem chi tiết
                        </button>
                    </div>
                </div>
            </section><!-- Best product sale -->

            <section class="SectionPost">
                <div class="post__latest swiper">
                    <div class="PostHeader">
                        <h3 class="PostHeaderTitle">
                            Bài viết mới nhất
                        </h3>  
                        <div class="PostHeaderNav">
                            <img src="{{ asset('web/img/icon/previous.png') }}" class="PostHeaderNavBtn PostHeaderNavBtn_Next">
                            <img src="{{ asset('web/img/icon/next.png') }}" class="PostHeaderNavBtn PostHeaderNavBtn_Prev">
                        </div>
                    </div>
                
                    <div class="swiper-wrapper PostGrid">
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/slide/slide01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                            
                        </div>
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide PostItem">
                            <div class="PostGroup">
                                <div class="PostThumnail">
                                    <img class="PostImg" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="PostDate">30-12-2022</p>
                                <h3 class="PostTitle">Lorem ipsum dolor sit amet.</h3>
                                <p class="PostDesc">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="PostBtnView">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section> <!-- End post -->
        </div> <!-- End PageWidth -->

        <Footer class="Footer">
            <section class="SectionService">
                <div class="SectionGrid">
                    <div class="ServiceItem ServiceItem_Separate">
                        <img src="{{ asset('web/img/icon/fast-delivery.png')}}" alt="" class="ServiceIcon">
                        <h3 class="ServiceText">Miễn phí vận chuyển</h3>
                    </div>
                    <div class="ServiceItem ServiceItem_Separate">
                        <img src="{{ asset('web/img/icon/percent.png')}}" alt="" class="ServiceIcon">
                        <h3 class="ServiceText">khuyến mại lên đến 50%</h3>
                    </div>
                    <div class="ServiceItem ServiceItem_Separate">
                        <img src="{{ asset('web/img/icon/save-money.png')}}" alt="" class="ServiceIcon">
                        <h3 class="ServiceText">Voucher 10%</h3>
                    </div>
                    <div class="ServiceItem">
                        <img src="{{ asset('web/img/icon/gift.png')}}" alt="" class="ServiceIcon">
                        <h3 class="ServiceText">Tích điểm nhận quà</h3>
                    </div>
                </div>
            </section> <!-- End service -->
            <div class="PageWidth">
                <div class="FooterAbove">
                    <div class="FooterGrid">
                        <div class="FooterColumn FooterColumn_Two">
                            <h3 class="FooterTitle">Văn phòng</h3>
                            <ul class="FooterList">
                                <li class="FooterListItem FooterListItem_Padding">CÔNG TY TNHH MẠNH DŨNG SPORTS (MANH DUNG SPORTS CO., LTD)</li>
                                <li class="FooterListItem FooterListItem_Padding">Địa chỉ: Số 72, phố Văn Giang, Thị Trấn Văn Giang, Huyện Văn Giang, Tỉnh Hưng Yên, Việt Nam</li>
                                <li class="FooterListItem">Người đại diện: Đỗ Sơn Tùng</li>
                                <li class="FooterListItem">Điện thoại: 0973359165</li>
                                <li class="FooterListItem">Email: manhdungsports@gmail.com</li>
                                <li class="FooterListItem">Mã số doanh nghiệp: 0901190162. Đăng ký lần đầu ngày 27/5/2025. Đăng ký thay đổi lần thứ: 1, ngày 26/6/2025</li>
                                <li class="FooterListItem"><img class="FooterImgBocongthuong" src="{{asset('web/img/bocongthuong.png')}}" alt=""></li>
                            </ul>
                        </div>
                        <div class="FooterColumn">
                            <h3 class="FooterTitle">Thông tin</h3>
                            <ul class="FooterList">
                                <li class="FooterListItem">Search</li>
                                <li class="FooterListItem">Sitemap</li>
                                <li class="FooterListItem">Privacy Policy</li>
                                <li class="FooterListItem">FAQs</li>
                                <li class="FooterListItem">Shipping</li>
                            </ul>
                        </div>
                        <div class="FooterColumn">
                            <h3 class="FooterTitle">Giới thiệu</h3>
                            <ul class="FooterList">
                                <li class="FooterListItem">Search</li>
                                <li class="FooterListItem">Sitemap</li>
                                <li class="FooterListItem">Privacy Policy</li>
                                <li class="FooterListItem">FAQs</li>
                                <li class="FooterListItem">Shipping</li>
                            </ul>
                        </div>
                        <div class="FooterColumn FooterColumn_Two">
                            <h3 class="FooterTitle">Gửi email cho chúng tôi</h3>
                            <ul class="FooterList">
                                <li class="FooterListItem FooterListItem_Padding">Subscribe to our latest newsletter to get news about special discounts.</li>
                                <li class="FooterListItem">
                                    <form class="FooterForm" action="">
                                        <input type="text" class="FooterFormInputEmail" placeholder="Nhập email ...">
                                        <input type="submit" class="FooterFormBtnSubmit" value="Đăng ký">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="FooterBelow">
                <div class="PageWidth">
                    <div class="FooterCopyright">
                        <p>© 2025, MANH DUNG SPORTS COMPANY LIMITED</p>
                    </div>
                    <div class="FooterSocial">
                        <a href="#" class="FooterSocialLink"><img class="FooterSocialIcon" src="{{ asset('web/img/social/facebook.png')}}" alt=""></a>
                        <a href="#" class="FooterSocialLink"><img class="FooterSocialIcon" src="{{ asset('web/img/social/youtube.png')}}" alt=""></a>
                        <a href="#" class="FooterSocialLink"><img class="FooterSocialIcon" src="{{ asset('web/img/social/gmail.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </Footer>
        
        <!-- Modal search layout -->
        <div class="Modal" id="ModalSearch">
            <div class="ModalOverlay"></div>
            <div class="ModalContent">
                <div class="ModalHeader">
                    <div class="ModalWidth">
                        <h3 class="ModalTitle">Tìm kiếm sản phẩm</h3>
                        <img class="ModalCloseIcon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>
                <div class="ModalBody">
                    <div class="ModalWidth">
                        <form action="" class="ModalSearchForm">
                            <input type="text" class="ModalSearchFormInput" placeholder="Nhập thông tin sản phẩm ...">
                            <button class="ModalSearchFormSubmit">TÌM KIẾM</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal category layout -->
        <div class="Modal" id="Modalcategory">
            <div class="ModalOverlay"></div>
            <div class="ModalContent_Left">
                <div class="ModalHeader">
                    <div class="ModalWidth">
                        <h3 class="ModalTitle">Danh mục sản phẩm</h3>
                        <img class="ModalCloseIcon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>

                <div class="ModalBody">
                    <div class="ModalWidth">
                        <ul class="ModalList">
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Thực phẩm dành cho người già</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Thực phẩm dành cho người trung tuổi</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Thực phẩm dành cho trẻ em</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Thực phẩm chăm sóc sắc đẹp</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Thực phẩm tăng cường sinh lý</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal menu layout -->
        <div class="Modal" id="Modalmenu">
            <div class="ModalOverlay"></div>
            <div class="ModalContentRight">
                <div class="ModalHeader">
                    <div class="ModalWidth">
                        <h3 class="ModalTitle">Menu</h3>
                        <img class="ModalCloseIcon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>
                <div class="ModalBody">
                    <div class="ModalWidth">
                        <ul class="ModalList">
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Menu 1</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Menu 2</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Menu 3</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Menu 4</a></li>
                            <li class="ModalListItem"><a href="" class="ModalItemLink">Menu 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal cart layout -->
        <div class="Modal" id="ModalCart">
            <div class="ModalOverlay"></div>
            <div class="ModalContentRight">
                <div class="ModalHeader">
                    <div class="ModalWidth">
                        <h3 class="ModalTitle">Giỏ hàng của bạn</h3>
                        <img class="ModalCloseIcon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>

                <div class="ModalBody">
                    <div class="ModalWidth">
                        <ul class="ModalList">
                            <li class="ModalListItem">
                                <a href="" class="ModalItemLink ModalItemLink_Cart">
                                    <img class="ModalCartDelIcon" title="Xoá sản phẩm" src="/assets/img/icon/delete.png" alt="">
                                    <img class="ModalCartThumnail" src="/assets/img/product/product01.jpg" alt="">
                                    <div class="ModalCartGroup">
                                        <h3 class="ModalCartTitle">Thực phẩm dành cho người già</h3>
                                        <p class="ModalCartPrice">Giá: 240.000 đ</p>
                                    </div>
                                </a>
                            </li>
                            <li class="ModalListItem">
                                <a href="" class="ModalItemLink ModalItemLink_Cart">
                                    <img class="ModalCartDelIcon" title="Xoá sản phẩm" src="/assets/img/icon/delete.png" alt="">
                                    <img class="ModalCartThumnail" src="/assets/img/product/product01.jpg" alt="">
                                    <div class="ModalCartGroup">
                                        <h3 class="ModalCartTitle">Thực phẩm dành cho người trung tuổi</h3>
                                        <p class="ModalCartPrice">Giá: 240.000 đ</p>
                                    </div>
                                </a>
                            </li>
                            <li class="ModalListItem">
                                <a href="" class="ModalItemLink ModalItemLink_Cart">
                                    <img class="ModalCartDelIcon" title="Xoá sản phẩm" src="/assets/img/icon/delete.png" alt="">
                                    <img class="ModalCartThumnail" src="/assets/img/product/product01.jpg" alt="">
                                    <div class="ModalCartGroup">
                                        <h3 class="ModalCartTitle">Thực phẩm dành cho trẻ em</h3>
                                        <p class="ModalCartPrice">Giá: 240.000 đ</p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="ModalFooter">
                    <div class="ModalFooterCart ModalWidth">
                        <div class="ModalFooterCartTop">
                            <div class="ModalFooterCartQuantity">
                                <label class="ModalFooterCartLabel">Số lượng:</label>
                                <span class="ModalFooterCartValue">3</span>
                            </div>
                            <div class="ModalFooterCartPrice">
                                <label class="ModalFooterCartLabel">Giá:</label>
                                <span class="ModalFooterCartValue">200.000 đ</span>
                            </div>
                        </div>
                        <div class="ModalFooterCartBottom">
                            <button class="ModalFooterCartBtn ModalFooterCartBtn_View">Xem giỏ hàng</button>
                            <button class="ModalFooterCartBtn ModalFooterCartBtn_Check">Thanh toán</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- Wrapper -->

    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/swiper-config.js')}}"></script>
    <script src="{{asset('js/Modal.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>