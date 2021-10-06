<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/.png" rel="shortcut icon">
    <title>Home - Satu Tani</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/app-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

</head>

<body class="config">
    <!--====== Preloader ======-->
    <div class="preloader is-active">
        <div class="preloader__wrap">
            <img class="preloader__img" src="{{ asset('assets/images/preloader.png') }}" alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        @include('layouts._navbar')

        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-1" id="hero-slider">
                    <div class="hero-slide hero-slide--1">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">
                                        <span class="content-span-1 u-c-secondary">Latest Update Stock</span>
                                        <span class="content-span-2 u-c-secondary">30% Off On Electronics</span>
                                        <span class="content-span-3 u-c-secondary">Find electronics on best prices, Also
                                            Discover most selling products of electronics</span>
                                        <span class="content-span-4 u-c-secondary">Starting At
                                            <span class="u-c-brand">$1050.00</span>
                                        </span>
                                        <a class="shop-now-link btn--e-brand" href="bawang-eceran-detail.html">SHOP
                                            NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-slide hero-slide--2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">
                                        <span class="content-span-1 u-c-white">Find Top Brands</span>
                                        <span class="content-span-2 u-c-white">10% Off On Electronics</span>
                                        <span class="content-span-3 u-c-white">Find electronics on best prices, Also
                                            Discover most selling products of electronics</span>
                                        <span class="content-span-4 u-c-white">Starting At
                                            <span class="u-c-brand">$380.00</span>
                                        </span>
                                        <a class="shop-now-link btn--e-brand" href="bawang-eceran-detail.html">SHOP
                                            NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-slide hero-slide--3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">
                                        <span class="content-span-1 u-c-secondary">Find Top Brands</span>
                                        <span class="content-span-2 u-c-secondary">10% Off On Electronics</span>
                                        <span class="content-span-3 u-c-secondary">Find electronics on best prices, Also
                                            Discover most selling products of electronics</span>
                                        <span class="content-span-4 u-c-secondary">Starting At
                                            <span class="u-c-brand">$550.00</span>
                                        </span>
                                        <a class="shop-now-link btn--e-brand" href="bawang-eceran-detail.html">SHOP
                                            NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Primary Slider ======-->

            <!--====== Section 1 ======-->
            <div class="u-s-p-b-60">
                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon">
                                        <i class="fas fa-shopping-basket"></i>
                                    </div>
                                    <div class="service__info-wrap">
                                        <span class="service__info-text-1">Kualitas Terbaik</span>
                                        <span class="service__info-text-2">Kami berupaya memberikan barang yang memiliki
                                            kwalitas terbaik</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon">
                                        <i class="fas fa-redo"></i>
                                    </div>
                                    <div class="service__info-wrap">
                                        <span class="service__info-text-1">Berbelanja dengan Percaya Diri</span>
                                        <span class="service__info-text-2">Perlindungan kami mencakup pembelian Anda
                                            dari klik hingga pengiriman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon">
                                        <i class="fas fa-headphones-alt"></i>
                                    </div>
                                    <div class="service__info-wrap">
                                        <span class="service__info-text-1">Pusat Bantuan 24/7</span>
                                        <span class="service__info-text-2">Bantuan sepanjang waktu untuk pengalaman
                                            berbelanja yang lancar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->

            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">
                <!--====== Section Intro ======-->
                <div class="bg" style="margin-bottom: -30px; margin-top: 30px;">
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap" style="padding: 50px;">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">BAWANG ECERAN</h1>
                                        <span class="section__span u-c-silver">DISARANKAN UNTUK PEMBELIAN SKALA
                                            KECIL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="slider-fouc">
                            <div class="owl-carousel product-slider" data-item="4">
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-eceran-detail.html">
                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product13.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">
                                            Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>
                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>

                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-eceran-detail.html">
                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product13.jpg') }}"
                                                    alt="">
                                            </a>

                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>
                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>

                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-eceran-detail.html">
                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product13.jpg') }}"
                                                    alt="">
                                            </a>

                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>
                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>

                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-eceran-detail.html">
                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product13.jpg') }}"
                                                    alt="">
                                            </a>

                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>
                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="load-more">
                                <a href="bawang-eceran.html">
                                    <button class="btn btn--e-brand" type="button" style="padding: 20px 60px;">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->



            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="bg1" style="margin-bottom: -30px; margin-top: 50px;">
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap" style="padding: 50px;">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">BAWANG KOPERASI</h1>

                                        <span class="section__span u-c-silver">DISARANKAN UNTUK PEMBELIAN SKALA
                                            BESAR</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="slider-fouc">
                            <div class="owl-carousel product-slider" data-item="4">
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-koperasi-detail.html">

                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product14.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>

                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-koperasi-detail.html">

                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product14.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>

                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-koperasi-detail.html">

                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product14.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>

                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="bawang-koperasi-detail.html">

                                                <img class="aspect__img" src="{{ asset('assets/images/product/electronic/product14.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <span class="product-o__category">
                                            <a href="bawang-eceran-detail.html">Stok: 200 Kg</a><br>
                                            <a href="bawang-eceran-detail.html">Panen: 30 Juli 2021</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="bawang-eceran-detail.html">Nikon DSLR 2K Camera</a>
                                        </span>

                                        <span class="product-o__price">Rp.125.00
                                            <span style="color: #999; font-size: 12px;">/ Kg</span>
                                        </span>

                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip"
                                            data-placement="top">
                                            <button class="btn btn--e-brand" type="button"
                                                style="width: 100%; padding: 8px; margin-top: 10px; border-radius: 4px;">BELI</button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="load-more">
                                <a href="bawang-koperasi.html">
                                    <button class="btn btn--e-brand" type="button" style="padding: 20px 60px;">Selanjutnya</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->



            <!--====== Section 10 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="bg2" style="margin-top: 50px;">
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap" style="padding: 50px;">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">ARTIKEL TERBARU</h1>

                                        <span class="section__span u-c-silver">MULAI HARI ANDA DENGAN BERITA SEGAR DAN
                                            TERBARU</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="bp-mini bp-mini--img u-h-100">
                                    <div class="bp-mini__thumbnail">
                                        <!--====== Image Code ======-->
                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block"
                                            href="article-detail.html">

                                            <img class="aspect__img" src="{{ asset('assets/images/blog/post-2.jpg') }}" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <div class="bp-mini__stat">

                                            <span class="bp-mini__stat-wrap">
                                                <span class="bp-mini__publish-date">
                                                    <a>
                                                        <span>25 February 2018</span>
                                                    </a>
                                                </span>
                                            </span>

                                            <span class="bp-mini__stat-wrap">
                                                <span class="bp-mini__preposition">By</span>

                                                <span class="bp-mini__author">
                                                    <a href="#">Dayle</a>
                                                </span>
                                            </span>

                                            <span class="bp-mini__stat">
                                                <span class="bp-mini__comment"></span>
                                            </span>
                                        </div>

                                        <span class="bp-mini__h1">
                                            <a href="article-detail.html">Life is an extraordinary Adventure</a>
                                        </span>

                                        <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="bp-mini bp-mini--img u-h-100">
                                    <div class="bp-mini__thumbnail">
                                        <!--====== Image Code ======-->
                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block"
                                            href="article-detail.html">

                                            <img class="aspect__img" src="{{ asset('assets/images/blog/post-2.jpg') }}" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <div class="bp-mini__stat">

                                            <span class="bp-mini__stat-wrap">
                                                <span class="bp-mini__publish-date">
                                                    <a>
                                                        <span>25 February 2018</span>
                                                    </a>
                                                </span>
                                            </span>

                                            <span class="bp-mini__stat-wrap">
                                                <span class="bp-mini__preposition">By</span>

                                                <span class="bp-mini__author">
                                                    <a href="#">Dayle</a>
                                                </span>
                                            </span>

                                            <span class="bp-mini__stat">
                                                <span class="bp-mini__comment"></span>
                                            </span>
                                        </div>

                                        <span class="bp-mini__h1">
                                            <a href="article-detail.html">Life is an extraordinary Adventure</a>
                                        </span>

                                        <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="bp-mini bp-mini--img u-h-100">
                                    <div class="bp-mini__thumbnail">
                                        <!--====== Image Code ======-->
                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block"
                                            href="article-detail.html">

                                            <img class="aspect__img" src="{{ asset('assets/images/blog/post-2.jpg') }}" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <div class="bp-mini__stat">

                                            <span class="bp-mini__stat-wrap">
                                                <span class="bp-mini__publish-date">
                                                    <a>
                                                        <span>25 February 2018</span>
                                                    </a>
                                                </span>
                                            </span>

                                            <span class="bp-mini__stat-wrap">
                                                <span class="bp-mini__preposition">By</span>

                                                <span class="bp-mini__author">
                                                    <a href="#">Dayle</a>
                                                </span>
                                            </span>

                                            <span class="bp-mini__stat">
                                                <span class="bp-mini__comment"></span>
                                            </span>
                                        </div>

                                        <span class="bp-mini__h1">
                                            <a href="article-detail.html">Life is an extraordinary Adventure</a>
                                        </span>

                                        <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="load-more">
                                <a href="article.html">
                                    <button class="btn btn--e-brand" type="button" style="padding:20px 60px">Load More</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 10 ======-->

            <!--====== Section 10 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content" style="background-color: rgb(245, 235, 224); margin-top: -10px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30" style="padding-top: 80px; padding-bottom: 50px;">
                                <div class="bp-mini bp-mini--img u-h-100" style="background-color: rgb(79, 165, 93);">
                                    <div class="bp-mini__thumbnail">

                                        <!--====== Image Code ======-->
                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block"
                                            href="blog-detail.html">

                                            <img class="aspect__img" style="padding: 20px 60px;"
                                                src="{{ asset('assets/images/ilustrasi/illust1.png') }}" alt="">
                                        </a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <div class="bp-mini__stat">

                                            <span class="bp-mini__h1" style="color: white;">
                                                <center>
                                                    <h4>Belanja lebih mudah dan praktis</h4>
                                                </center>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 u-s-m-b-30" style="padding-top: 80px;  padding-bottom: 50px;">
                                <div class="bp-mini bp-mini--img u-h-100" style="background-color: rgb(79, 165, 93);">
                                    <div class="bp-mini__thumbnail">

                                        <!--====== Image Code ======-->

                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block"
                                            href="blog-detail.html">

                                            <img class="aspect__img" style="padding: 20px 60px;"
                                                src="{{ asset('assets/images/ilustrasi/Illust2.png') }}" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <div class="bp-mini__stat">
                                            <span class="bp-mini__h1" style="color: white;">

                                                <center>
                                                    <h4>Kualitas terjamin</h4>
                                                </center>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 u-s-m-b-30" style="padding-top: 80px;  padding-bottom: 50px;">
                                <div class="bp-mini bp-mini--img u-h-100" style="background-color: rgb(79, 165, 93);">
                                    <div class="bp-mini__thumbnail">

                                        <!--====== Image Code ======-->

                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block"
                                            href="blog-detail.html">

                                            <img class="aspect__img" style="padding: 20px 60px;"
                                                src="{{ asset('assets/images/ilustrasi/illust3 (1).png') }}" alt="">
                                        </a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <div class="bp-mini__stat">

                                            <span class="bp-mini__h1" style="color: white;">

                                                <center>
                                                    <h4>Promo menarik</h4>
                                                </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 10 ======-->


            <!--====== Main Footer ======-->
            <footer>
                <div class="outer-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">

                                    <img src="{{ asset('assets/images/logo/logo st1.png') }}" alt="" style="width: 150px;">
                                    <div class="outer-footer__text-wrap">

                                        <span>
                                            Satutani merupakan sebuah situs website yang akan menjembatani petani dan
                                            pembeli bawang secara
                                            langsung dan dapar mempermudah petani dalam mempromosikan dan menjual hasil
                                            panen secara cepat dengan
                                            memanfaatkan internet
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="outer-footer__content u-s-m-b-40">

                                            <span class="outer-footer__content-title">Layanan</span>
                                            <div class="outer-footer__list-wrap">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html">Tanya Jawab</a></li>
                                                    <li>
                                                        <a href="dashboard.html">Panduan</a></li>
                                                    <li>
                                                        <a href="shop-side-version-2.html">Tentang Kami</a></li>
                                                    <li>
                                                        <a href="dash-payment-option.html">Syarat dan Ketentuan</a></li>
                                                    <li>
                                                        <a href="shop-side-version-2.html">Kebijakan Privasi</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="outer-footer__content u-s-m-b-40">
                                            <div class="outer-footer__list-wrap">

                                                <span class="outer-footer__content-title">Kantor</span>
                                                <div class="outer-footer__text-wrap">
                                                    <span>Jalan Ujung Bori Komp. Kodap Stp 3/13 Kelurahan Bitoa
                                                        Kecematan Manggala Kota Makassar, 90234</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="outer-footer__content">
                                    <span class="outer-footer__content-title">Kontak Kami</span>
                                    <form class="newsletter">
                                        <div class="u-s-m-b-15">
                                            <div class="radio-box newsletter__radio">
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-lg-4 col-sm-2">
                                                        <a href=""><img src="{{ asset('images/icon/fb.svg') }}" alt=""> </a>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-2">
                                                        <a href=""><img src="{{ asset('images/icon/ig.svg') }}" alt=""> </a>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-2" style="margin-bottom: 10px;">
                                                        <a href=""><img src="{{ asset('images/icon/twi.svg') }}" alt=""> </a>
                                                    </div>


                                                    <div class="col-lg-4 col-sm-2">
                                                        <a href=""><img src="{{ asset('images/icon/wa.svg') }}" alt=""> </a>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-2">
                                                        <a href=""><img src="{{ asset('images/icon/yt.svg') }}" alt=""> </a>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-2">
                                                        <a href=""><img src="{{ asset('images/icon/tele.svg') }}" alt=""> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="lower-footer__content">
                                    <div class="lower-footer__copyright">
                                        <span>Copyright © 2021</span>
                                        <a href="index.html">satutani.id</a>
                                        <span>All Right Reserved</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--====== Modal Section ======-->

            <!--====== Quick Look Modal ======-->
            <div class="modal fade" id="quick-look">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal--shadow">

                        <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5">

                                    <!--====== Product Breadcrumb ======-->
                                    <div class="pd-breadcrumb u-s-m-b-30">
                                        <ul class="pd-breadcrumb__list">
                                            <li class="has-separator">

                                                <a href="index.hml">Home</a></li>
                                            <li class="has-separator">

                                                <a href="shop-side-version-2.html">Electronics</a></li>
                                            <li class="has-separator">

                                                <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                                            <li class="is-marked">

                                                <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                        </ul>
                                    </div>
                                    <!--====== End - Product Breadcrumb ======-->


                                    <!--====== Product Detail ======-->
                                    <div class="pd u-s-m-b-30">
                                        <div class="pd-wrap">
                                            <div id="js-product-detail-modal">
                                                <div>

                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-1.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-2.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-3.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-4.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-5.jpg') }}"
                                                        alt="">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="u-s-m-t-15">
                                            <div id="js-product-detail-modal-thumbnail">
                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-1.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-2.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-3.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-4.jpg') }}"
                                                        alt="">
                                                </div>

                                                <div>
                                                    <img class="u-img-fluid" src="{{ asset('assets/images/product/product-d-5.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Product Detail ======-->
                                </div>
                                <div class="col-lg-7">

                                    <!--====== Product Right Side Details ======-->
                                    <div class="pd-detail">
                                        <div>
                                            <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span></div>
                                        <div>
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__price">$6.99</span>

                                                <span class="pd-detail__discount">(76% OFF)</span>
                                                <div class="pd-detail__del">$28.97</div>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__rating gl-rating-style">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span class="pd-detail__review u-s-m-l-4">
                                                    <a href="product-detail.html">23 Reviews</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__stock">200 in stock</span>

                                                <span class="pd-detail__left">Only 2 left</span></div>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of
                                                the printing and typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen
                                                book.</span></div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__click-wrap"><i
                                                        class="far fa-heart u-s-m-r-6"></i>

                                                    <a href="signin.html">Add to Wishlist</a>

                                                    <span class="pd-detail__click-count">(222)</span></span></div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__click-wrap"><i
                                                        class="far fa-envelope u-s-m-r-6"></i>

                                                    <a href="signin.html">Email me When the price drops</a>

                                                    <span class="pd-detail__click-count">(20)</span></span></div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <ul class="pd-social-list">
                                                <li>

                                                    <a class="s-fb--color-hover" href="#"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li>

                                                    <a class="s-tw--color-hover" href="#"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li>

                                                    <a class="s-insta--color-hover" href="#"><i
                                                            class="fab fa-instagram"></i></a></li>
                                                <li>

                                                    <a class="s-wa--color-hover" href="#"><i
                                                            class="fab fa-whatsapp"></i></a></li>
                                                <li>

                                                    <a class="s-gplus--color-hover" href="#"><i
                                                            class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <form class="pd-detail__form">
                                                <div class="pd-detail-inline-2">
                                                    <div class="u-s-m-b-15">

                                                        <!--====== Input Counter ======-->
                                                        <div class="input-counter">

                                                            <span class="input-counter__minus fas fa-minus"></span>

                                                            <input
                                                                class="input-counter__text input-counter--text-primary-style"
                                                                type="text" value="1" data-min="1" data-max="1000">

                                                            <span class="input-counter__plus fas fa-plus"></span></div>
                                                        <!--====== End - Input Counter ======-->
                                                    </div>
                                                    <div class="u-s-m-b-15">

                                                        <button class="btn btn--e-brand-b-2" type="submit">Add to
                                                            Cart</button></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                            <ul class="pd-detail__policy-list">
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Buyer Protection.</span></li>
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Full Refund if you don't receive your order.</span></li>
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Returns accepted if product not as described.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Product Right Side Details ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Quick Look Modal ======-->


            <!--====== Add to Cart Modal ======-->
            <div class="modal fade" id="add-to-cart">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal-radius modal-shadow">

                        <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="success u-s-m-b-30">
                                        <div class="success__text-wrap"><i class="fas fa-check"></i>

                                            <span>Item is added successfully!</span></div>
                                        <div class="success__img-wrap">

                                            <img class="u-img-fluid" src="images/product/electronic/product1.jpg"
                                                alt=""></div>
                                        <div class="success__info-wrap">

                                            <span class="success__name">Beats Bomb Wireless Headphone</span>

                                            <span class="success__quantity">Quantity: 1</span>

                                            <span class="success__price">Rp.170.00</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="s-option">
                                        <span class="s-option__text">1 item (s) in your cart</span>
                                        <div class="s-option__link-box">
                                            <a class="s-option__link btn--e-white-brand-shadow"
                                                data-dismiss="modal">CONTINUE SHOPPING</a>
                                            <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW
                                                CART</a>
                                            <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED
                                                TO CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Main App ======-->

        <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
        <script>
            window.ga = function () {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

        <!--====== Vendor Js ======-->
        <script src="{{ asset('assets/js/vendor.js') }}"></script>

        <!--====== jQuery Shopnav plugin ======-->
        <script src="{{ asset('assets/js/jquery.shopnav.js') }}"></script>

        <!--====== App ======-->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <!--====== Noscript ======-->
        <noscript>
            <div class="app-setting">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="app-setting__wrap">
                                <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                                <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                    JavaScript-capable browser.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </noscript>
</body>

</html>
