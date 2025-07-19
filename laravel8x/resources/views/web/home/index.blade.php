<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ecommerce</title>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" >
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}" >

</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__top">
                <div class="page-width">
                    <ul class="header-top__ul">
                        <li class="header-top__li">
                            <select class="header-top__select">
                                <option value="">VND</option>
                                <option value="">USD</option>
                            </select>
                        </li>
                        <li class="header-top__li">
                            <select class="header-top__select">
                                <option value="">VI</option>
                                <option value="">US</option>
                                <option value="">UK</option>
                            </select>
                        </li>
                        <li class="header-top__li header-top__li--lg header-top__li--separate">Công ty cổ phần dược mỹ phẩm olympus</li>
                    </ul>
    
                    <ul class="header-top__ul header-top__ul--sm">
                        <li class="header-top__li">Trạng thái giao hàng</li>
                        <li class="header-top__li header-top__li--separate">Trung tâm hỗ trợ</li>
                    </ul>
                </div>
            </div>

            <div class="header__middle page-width">
                <div class="header-middle__logo">
                    <img src="{{asset('web/img/logo.png')}}" class="header-middle-logo__img" alt="logo">
                </div>
                <div class="header-middle__search">
                    <form action="" class="header-middle-search__form">
                        <input type="text" class="header-middle-search-form__input" placeholder="Tìm kiếm các sản phẩm ...">
                        <button class="header-middle-search-form__submit">TÌM KIẾM</button>
                    </form>
                </div>
                <div class="header-middle__right">
                    <div class="header-middle-right__item header-middle-right__item--myaccount header-middle-right__item--xl">
                        <a href="#" class="header-middle-right__myacount">Tài khoản của tôi</a>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--search" src="{{ asset('web/img/icon/search.png')}}">
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--noxl">
                        <img class="header-middle-right__icon" src="{{ asset('web/img/icon/user.png')}}">
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--cart">
                        <img class="header-middle-right__icon header-middle-right__icon--cart" src="{{ asset('web/img/icon/cart.png')}}">
                        <span class="header-middle-right-cart__notification">3</span>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--menu" src="{{ asset('web/img/icon/bar.png')}}">
                    </div>
                </div>
            </div>

            <nav class="header__nav">
                <div class="page-width">
                    <div class="header-nav__category">
                        <button class="header-nav__catbtn" id="header-nav__catbtn">
                            <img class="header-nav-category__icon" src="{{ asset('web/img/icon/category.png')}}">
                            <span class="header-nav-category__text">Danh mục sản phẩm</span>
                        </button>
                    </div>
                    
                    <ul class="header-nav__ul header-nav__ul--menu header-nav__ul--lg">
                        <li class="header-nav__li"><a class="header-nav__a" href="">Trang chủ</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Sản phẩm</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Tin tức</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Giới thiệu</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Liên hệ</a></li>
                    </ul>

                    <ul class="header-nav__ul header-nav__ul--freeship">
                        <li class="header-nav__li">Free ship với đơn từ <span class="header-nav-ul-freeship__value">100.000 đ +</span></li>
                    </ul>
                </div>
            </nav>
        </header>

        <header class="header__scroll" id="header__scroll">
            <div class="header__middle page-width">
                <div class="header-middle__logo">
                    <img src="{{ asset('web/img/olympus-logo.png" class="header-middle-logo__img" alt="logo')}}">
                </div>
                <div class="header-middle__search">
                    <form action="" class="header-middle-search__form">
                        <input type="text" class="header-middle-search-form__input" placeholder="Tìm kiếm các sản phẩm ...">
                        <button class="header-middle-search-form__submit">TÌM KIẾM</button>
                    </form>
                </div>
                <div class="header-middle__right">
                    <div class="header-middle-right__item header-middle-right__item--myaccount header-middle-right__item--xl">
                        <a href="#" class="header-middle-right__myacount">Tài khoản của tôi</a>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--search" src="{{ asset('web/img/icon/search.png')}}">
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--noxl">
                        <img class="header-middle-right__icon" src="{{ asset('web/img/icon/user.png')}}">
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--cart">
                        <img class="header-middle-right__icon header-middle-right__icon--cart" src="{{ asset('web/img/icon/cart.png')}}">
                        <span class="header-middle-right-cart__notification">3</span>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--menu" src="{{ asset('web/img/icon/bar.png')}}">
                    </div>
                </div>
            </div>
        </header>

        <div class="page-width">
            <section class="slider__section">
                <div class="slider__main swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-main__item">
                            <img class="slider-main__img" src="{{ asset('web/img/slide/slide03.jpg')}}">
                            <div class="slider-main__content">
                                <p class="slider-main__sale">Sale 50%</p>
                                <h3 class="slider-main__title">
                                    Chăm sóc da tự nhiên
                                </h3>
                                <p class="slider-main__description">Nguyên liệu nhập ngoại</p>
                                <button class="slider-main__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide slider-main__item">
                            <img class="slider-main__img" src="{{ asset('web/img/slide/slide04.jpg')}}">
                            <div class="slider-main__content">
                                <p class="slider-main__sale">Sale 50%</p>
                                <h3 class="slider-main__title">
                                    Chăm sóc da tự nhiên
                                </h3>
                                <p class="slider-main__description">Nguyên liệu nhập ngoại</p>
                                <button class="slider-main__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </section> <!-- End slider -->

            <section class="brand__section">
                <div class="brand__latest swiper">
                    <div class="swiper-wrapper brand-row__wrapper">
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/slide/slide01.jpg')}}">
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide brand-row__item">
                            <div class="brand-row__content">
                                <div class="brand-row__thumnail">
                                    <img class="brand-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section> <!-- End brand -->
        
            <section class="product__section">
                <div class="product__latest swiper">
                    <div class="product-row__header">
                        <h3 class="product-row-header__title">
                            Sản phẩm mới nhất
                        </h3>  
                        <div class="product-row-header__navigation">
                            <img src="{{ asset('web/img/icon/previous.png') }}" class="product-row-header__btn product-row-header__btn--next">
                            <img src="{{ asset('web/img/icon/next.png') }}" class="product-row-header__btn product-row-header__btn--prev">
                        </div>
                    </div>
                
                    <div class="swiper-wrapper product-row__wrapper">
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/slide/slide01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                            
                        </div>
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                        <div class="swiper-slide product-row__item">
                            <span class="product-row__sale">-16%</span>
                            <div class="product-row__content">
                                <div class="product-row__thumnail">
                                    <img class="product-row__img" src="{{ asset('web/img/product/product01.jpg')}}">
                                </div>
                                <h3 class="product-row__title">Lorem ipsum dolor sit amet.</h3>
                                <div class="product-row__price">
                                    <del class="product-row-price__origin">120.000 đ</del>
                                    <span class="product-row-price__sale">170.000 đ</span>
                                </div>
                                <button class="product-row__viewbtn">
                                    xem chi tiết
                                </button>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section> <!-- End product -->

            <section class="banner__section">
                <div class="banner__item">
                    <img class="banner__img" src="{{ asset('web/img/slide/slide01.jpg')}}">
                    <div class="banner__content">
                        <p class="banner__sale">Sale 50%</p>
                        <h3 class="banner__title">
                            Chăm sóc da tự nhiên
                        </h3>
                        <button class="banner__viewbtn">
                            xem chi tiết
                        </button>
                    </div>
                </div>
                <div class="banner__item">
                    <img class="banner__img" src="{{ asset('web/img/slide/slide01.jpg')}}">
                    <div class="banner__content">
                        <p class="banner__sale">Sale 50%</p>
                        <h3 class="banner__title">
                            Chăm sóc da tự nhiên
                        </h3>
                        <button class="banner__viewbtn">
                            xem chi tiết
                        </button>
                    </div>
                </div>
                <div class="banner__item">
                    <img class="banner__img" src="{{ asset('web/img/slide/slide01.jpg')}}">
                    <div class="banner__content">
                        <p class="banner__sale">Sale 50%</p>
                        <h3 class="banner__title">
                            Chăm sóc da tự nhiên
                        </h3>
                        <button class="banner__viewbtn">
                            xem chi tiết
                        </button>
                    </div>
                </div>
            </section><!-- Best product sale -->

            <section class="post__section">
                <div class="post__latest swiper">
                    <div class="post-row__header">
                        <h3 class="post-row-header__title">
                            Bài viết mới nhất
                        </h3>  
                        <div class="post-row-header__navigation">
                            <img src="{{ asset('web/img/icon/previous.png') }}" class="post-row-header__btn post-row-header__btn--next">
                            <img src="{{ asset('web/img/icon/next.png') }}" class="post-row-header__btn post-row-header__btn--prev">
                        </div>
                    </div>
                
                    <div class="swiper-wrapper post-row__wrapper">
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/slide/slide01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                            
                        </div>
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide post-row__item">
                            <div class="post-row__content">
                                <div class="post-row__thumnail">
                                    <img class="post-row__img" src="{{ asset('web/img/post/post01.jpg')}}">
                                </div>
                                <p class="post-row__date">30-12-2022</p>
                                <h3 class="post-row__title">Lorem ipsum dolor sit amet.</h3>
                                <p class="post-row__description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <a href="#" class="post-row__viewlink">
                                    xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section> <!-- End post -->
        </div> <!-- End page-width -->

        <footer class="footer">
            <section class="service__section">
                <div class="service__row">
                    <div class="service-row__item service-row__item--separate">
                        <img src="{{ asset('web/img/icon/fast-delivery.png" alt="" class="service-row-item__icon')}}">
                        <h3 class="service-row-item__text">Miễn phí vận chuyển</h3>
                    </div>
                    <div class="service-row__item service-row__item--separate">
                        <img src="{{ asset('web/img/icon/percent.png" alt="" class="service-row-item__icon')}}">
                        <h3 class="service-row-item__text">khuyến mại lên đến 50%</h3>
                    </div>
                    <div class="service-row__item service-row__item--separate">
                        <img src="{{ asset('web/img/icon/save-money.png" alt="" class="service-row-item__icon')}}">
                        <h3 class="service-row-item__text">Voucher 10%</h3>
                    </div>
                    <div class="service-row__item">
                        <img src="{{ asset('web/img/icon/gift.png" alt="" class="service-row-item__icon')}}">
                        <h3 class="service-row-item__text">Tích điểm nhận quà</h3>
                    </div>
                </div>
            </section> <!-- End service -->
            <div class="page-width">
                <div class="footer__above">
                    <div class="footer-above-row">
                        <div class="footer-above__col footer-above__col--2">
                            <h3 class="footer-above__title">Văn phòng</h3>
                            <ul class="footer-above__ul">
                                <li class="footer-above-ul__li footer-above-ul__li--padding">Pharmgy - Medical Store 507 - Union Trade Center, United States</li>
                                <li class="footer-above-ul__li">(00) 1234 567 890</li>
                                <li class="footer-above-ul__li">+910123456789</li>
                                <li class="footer-above-ul__li">pharmgy@exampledemo.com</li>
                            </ul>
                        </div>
                        <div class="footer-above__col">
                            <h3 class="footer-above__title">Thông tin</h3>
                            <ul class="footer-above__ul">
                                <li class="footer-above-ul__li">Search</li>
                                <li class="footer-above-ul__li">Sitemap</li>
                                <li class="footer-above-ul__li">Privacy Policy</li>
                                <li class="footer-above-ul__li">FAQs</li>
                                <li class="footer-above-ul__li">Shipping</li>
                            </ul>
                        </div>
                        <div class="footer-above__col">
                            <h3 class="footer-above__title">Giới thiệu</h3>
                            <ul class="footer-above__ul">
                                <li class="footer-above-ul__li">Search</li>
                                <li class="footer-above-ul__li">Sitemap</li>
                                <li class="footer-above-ul__li">Privacy Policy</li>
                                <li class="footer-above-ul__li">FAQs</li>
                                <li class="footer-above-ul__li">Shipping</li>
                            </ul>
                        </div>
                        <div class="footer-above__col footer-above__col--2">
                            <h3 class="footer-above__title">Gửi email cho chúng tôi</h3>
                            <ul class="footer-above__ul">
                                <li class="footer-above-ul__li footer-above-ul__li--padding">Subscribe to our latest newsletter to get news about special discounts.</li>
                                <li class="footer-above-ul__li">
                                    <form class="footer-above__form" action="">
                                        <input type="text" class="footer-above-input__email" placeholder="Nhập email ...">
                                        <input type="submit" class="footer-above-input__submit" value="Đăng ký">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__below">
                <div class="page-width">
                    <div class="footer-below__copyright">
                        <p>© 2023, Pharmgy - Medical Store Powered By Shopify</p>
                    </div>
                    <div class="footer-below__social">
                        <a href="#" class="footer-below-social__link"><img class="footer-below-social__icon" src="{{ asset('web/img/social/facebook.png')}}" alt=""></a>
                        <a href="#" class="footer-below-social__link"><img class="footer-below-social__icon" src="{{ asset('web/img/social/youtube.png')}}" alt=""></a>
                        <a href="#" class="footer-below-social__link"><img class="footer-below-social__icon" src="{{ asset('web/img/social/gmail.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Modal search layout -->
        <div class="modal" id="modal__search">
            <div class="modal__overlay"></div>
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__width">
                        <h3 class="modal__title">Tìm kiếm sản phẩm</h3>
                        <img class="modal__clsicon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__width">
                        <form action="" class="modal-search__form">
                            <input type="text" class="modal-search-form__input" placeholder="Nhập thông tin sản phẩm ...">
                            <button class="modal-search-form__submit">TÌM KIẾM</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal category layout -->
        <div class="modal" id="modal__category">
            <div class="modal__overlay"></div>
            <div class="modal__content--left">
                <div class="modal__header">
                    <div class="modal__width">
                        <h3 class="modal__title">Danh mục sản phẩm</h3>
                        <img class="modal__clsicon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>

                <div class="modal__body">
                    <div class="modal__width">
                        <ul class="modal-body__ul">
                            <li class="modal-body__li"><a href="" class="modal-body__a">Thực phẩm dành cho người già</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Thực phẩm dành cho người trung tuổi</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Thực phẩm dành cho trẻ em</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Thực phẩm chăm sóc sắc đẹp</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Thực phẩm tăng cường sinh lý</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal menu layout -->
        <div class="modal" id="modal__menu">
            <div class="modal__overlay"></div>
            <div class="modal__content--right">
                <div class="modal__header">
                    <div class="modal__width">
                        <h3 class="modal__title">Menu</h3>
                        <img class="modal__clsicon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__width">
                        <ul class="modal-body__ul">
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 1</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 2</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 3</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 4</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal cart layout -->
        <div class="modal" id="modal__cart">
            <div class="modal__overlay"></div>
            <div class="modal__content--right">
                <div class="modal__header">
                    <div class="modal__width">
                        <h3 class="modal__title">Giỏ hàng của bạn</h3>
                        <img class="modal__clsicon" src="{{ asset('web/img/icon/close.png')}}">
                    </div>
                </div>

                <div class="modal__body">
                    <div class="modal__width">
                        <ul class="modal-body__ul">
                            <li class="modal-body__li">
                                <a href="" class="modal-body__a modal-body__a--cart">
                                    <img class="modal-body-cart__deleteicon" title="Xoá sản phẩm" src="/assets/img/icon/delete.png" alt="">
                                    <img class="modal-body-cart__thumnail" src="/assets/img/product/product01.jpg" alt="">
                                    <div class="modal-body-cart__content">
                                        <h3 class="modal-body-cart-content__title">Thực phẩm dành cho người già</h3>
                                        <p class="modal-body-cart-content__price">Giá: 240.000 đ</p>
                                    </div>
                                </a>
                            </li>
                            <li class="modal-body__li">
                                <a href="" class="modal-body__a modal-body__a--cart">
                                    <img class="modal-body-cart__deleteicon" title="Xoá sản phẩm" src="/assets/img/icon/delete.png" alt="">
                                    <img class="modal-body-cart__thumnail" src="/assets/img/product/product01.jpg" alt="">
                                    <div class="modal-body-cart__content">
                                        <h3 class="modal-body-cart-content__title">Thực phẩm dành cho người trung tuổi</h3>
                                        <p class="modal-body-cart-content__price">Giá: 240.000 đ</p>
                                    </div>
                                </a>
                            </li>
                            <li class="modal-body__li">
                                <a href="" class="modal-body__a modal-body__a--cart">
                                    <img class="modal-body-cart__deleteicon" title="Xoá sản phẩm" src="/assets/img/icon/delete.png" alt="">
                                    <img class="modal-body-cart__thumnail" src="/assets/img/product/product01.jpg" alt="">
                                    <div class="modal-body-cart__content">
                                        <h3 class="modal-body-cart-content__title">Thực phẩm dành cho trẻ em</h3>
                                        <p class="modal-body-cart-content__price">Giá: 240.000 đ</p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="modal__footer">
                    <div class="modal-footer__cart modal__width">
                        <div class="modal-footer-cart__top">
                            <div class="modal-footer-cart-top__total">
                                <label class="modal-footer-cart__label">Số lượng:</label>
                                <span class="modal-footer-cart__value">3</span>
                            </div>
                            <div class="modal-footer-cart-top__price">
                                <label class="modal-footer-cart__label">Giá:</label>
                                <span class="modal-footer-cart__value">200.000 đ</span>
                            </div>
                        </div>
                        <div class="modal-footer-cart__bottom">
                            <button class="modal-footer-cart-bottom__btn modal-footer-cart-bottom__btn--view">Xem giỏ hàng</button>
                            <button class="modal-footer-cart-bottom__btn modal-footer-cart-bottom__btn--checkout">Thanh toán</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- Wrapper -->

    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/swiper-config.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>