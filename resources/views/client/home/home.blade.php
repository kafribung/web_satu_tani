<x-main>
    <!--====== Owl-Carousel ======-->
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
    <!--====== End - Owl-Carousel ======-->

    <!--====== Motto======-->
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
    <!--====== End - Motto======-->

    <!--====== Bawang Enceran ======-->
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

        <!--====== Bawang Petani ======-->
        <div class="section__content">
            <div class="container">
                <div class="slider-fouc">
                    <div class="owl-carousel product-slider" data-item="4">
                        @forelse ($bawangPetanis as $bawangPetani)
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="bp-mini__stat">
                                    <span class="bp-mini__preposition">Oleh</span>
                                    <span class="bp-mini__author">
                                        <a href="">{{ $bawangPetani->user->name }}</a>
                                    </span>
                                </div>

                                <div class="product-o__wrap">
                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">
                                        <img class="aspect__img"
                                            src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}" alt="">
                                    </a>
                                </div>

                                <span class="product-o__category">
                                    <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">Stok: {{
                                        $bawangPetani->stock }} Kg</a><br>
                                    <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">Panen: {{
                                        date('d-m-Y', strtotime($bawangPetani->harvest_time)) }}</a>
                                </span>

                                <span class="product-o__name">
                                    <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}"
                                        style="font-size: 16px;">{{ $bawangPetani->name }}</a>
                                </span>
                                @php
                                $discount = number_format((($bawangPetani->price * $bawangPetani->discount) / 100))
                                @endphp
                                <span class="product-o__price">
                                    <span style="color: #999; font-size: 12px;">Rp.{{ $harga = number_format($bawangPetani->price - $discount, 2) }} / Kg</span>
                                    @if ($bawangPetani->discount != 0 || $bawangPetani->discount != null)
                                    <span class="product-o__discount">{{ number_format($bawangPetani->price, 2) }}</span>
                                    @endif
                                </span>
                            </div>
                        </div>
                        @empty
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <span class="product-o__category">
                                    <a>Bawang Petani belum ditambahkan</a>
                                </span>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="load-more">
                        <a href="{{ route('bawang-eceran.index') }}">
                            <button class="btn btn--e-brand" type="button" style="padding: 20px 60px;">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Bawang Petani ======-->
    </div>
    <!--====== End - Bawang Enceran ======-->

    <!--====== Bawang Koperasi ======-->
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

                                        <img class="aspect__img"
                                            src="{{ asset('assets/images/product/electronic/product14.jpg') }}" alt="">
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
                            <button class="btn btn--e-brand" type="button"
                                style="padding: 20px 60px;">Selanjutnya</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Bawang Koperasi ======-->

    <!--====== Manfaat ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content" style="background-color: rgb(245, 235, 224); margin-top: -10px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 u-s-m-b-30" style="padding-top: 80px; padding-bottom: 50px;">
                        <div class="bp-mini bp-mini--img u-h-100" style="background-color: rgb(79, 165, 93);">
                            <div class="bp-mini__thumbnail">
                                <!--====== Image Code ======-->
                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block">
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
                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block">
                                    <img class="aspect__img" style="padding: 20px 60px;"
                                        src="{{ asset('assets/images/ilustrasi/Illust2.png') }}" alt="">
                                </a>
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
                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block">
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
    <!--====== End - Manfaat ======-->
</x-main>
