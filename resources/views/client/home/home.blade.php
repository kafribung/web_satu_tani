<x-main>
    <!--====== Owl-Carousel ======-->
    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
        <div class="owl-carousel primary-style-1" id="hero-slider">
            <div class="hero-slide hero-slide--1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content slider-content--animation">
                                <span class="content-span-1 u-c-white">Tempat Belanja</span>
                                <span class="content-span-2 u-c-white">Bawang dengan kwalitas terbaik</span>
                                <span class="content-span-3 u-c-white">Pangkalan bawang eceran dan bawang koperasi</span>
                                <span class="content-span-4 u-c-white">Marketplace bawang
                                    <span class="u-c-white">Cek bawang eceran</span>
                                </span>
                                <a class="shop-now-link btn--e-brand" href="#bawang-eceran">Beli disini</a>
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
                                <span class="content-span-1 u-c-white">Kini telah hadir</span>
                                <span class="content-span-2 u-c-white">Marketplace bawang terbesar di Indonesia</span>
                                <span class="content-span-3 u-c-white">Mengoptimalkan bawang lokal Indonesia</span>
                                <span class="content-span-4 u-c-white">Menerima pesanan dalam jumlah banyak
                                    <span class="u-c-brand">Cek link bawang koperasi di bawah</span>
                                </span>
                                <a class="shop-now-link btn--e-brand" href="#bawang-koperasi">Beli disini</a>
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
                                <span class="content-span-1 u-c-white">Satutani.com</span>
                                <span class="content-span-2 u-c-white">Tempat belanja bawang dengan kualitas terbaik</span>
                                <span class="content-span-3 u-c-white">Bergaransi!</span>
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
    <div class="u-s-p-b-60" id="bawang-eceran">
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
    <div class="u-s-p-b-60"  id="bawang-koperasi">
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

        <!--====== Bawang Koperasi ======-->
        <div class="section__content">
            <div class="container">
                <div class="slider-fouc">
                    <div class="owl-carousel product-slider" data-item="4">
                        @forelse ($bawangKoperasis as $bawangKoperasi)
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="bp-mini__stat">
                                    <span class="bp-mini__preposition">Oleh</span>
                                    <span class="bp-mini__author">
                                        <a href="">{{ $bawangKoperasi->user->name }}</a>
                                    </span>
                                </div>

                                <div class="product-o__wrap">
                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="{{ route('bawang-koperasi.show', $bawangKoperasi->slug) }}">
                                        <img class="aspect__img"
                                            src="{{ $bawangKoperasi->take_img($bawangKoperasi->img_1) }}" alt="">
                                    </a>
                                </div>

                                <span class="product-o__category">
                                    <a href="{{ route('bawang-koperasi.show', $bawangKoperasi->slug) }}">Stok: {{
                                        $bawangKoperasi->stock }} Kg</a><br>
                                    <a href="{{ route('bawang-koperasi.show', $bawangKoperasi->slug) }}">Panen: {{
                                        date('d-m-Y', strtotime($bawangKoperasi->harvest_time)) }}</a>
                                </span>

                                <span class="product-o__name">
                                    <a href="{{ route('bawang-koperasi.show', $bawangKoperasi->slug) }}"
                                        style="font-size: 16px;">{{ $bawangKoperasi->name }}</a>
                                </span>
                                @php
                                $discount = number_format((($bawangKoperasi->price * $bawangKoperasi->discount) / 100))
                                @endphp
                                <span class="product-o__price">
                                    <span style="color: #999; font-size: 12px;">Rp.{{ $harga = number_format($bawangKoperasi->price - $discount, 2) }} / Kg</span>
                                    @if ($bawangKoperasi->discount != 0 || $bawangKoperasi->discount != null)
                                    <span class="product-o__discount">{{ number_format($bawangKoperasi->price, 2) }}</span>
                                    @endif
                                </span>
                            </div>
                        </div>
                        @empty
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <span class="product-o__category">
                                    <a>KoperasiPetani belum ditambahkan</a>
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
                                        src="{{ asset('assets/images/ilustrasi/illust3.png') }}" alt="">
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
