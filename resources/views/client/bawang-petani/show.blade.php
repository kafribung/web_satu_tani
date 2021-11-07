<x-main>
    <!--====== Section 1 ======-->
    <div class="u-s-p-t-60">
        <div class="container u-s-p-b-60">
            <div class="row">
                @if (session('message'))
                <div class="col-lg-12">
                    <span class="pd-detail__left mb-5">{{ session('message') }}</span>
                </div>
                @endif

                <div class="col-lg-5">
                    <!--====== Product Detail Zoom ======-->
                    <div class="pd u-s-m-b-30">
                        <div class="slider-fouc pd-wrap">
                            <div id="pd-o-initiate">
                                <div class="pd-o-img-wrap" data-src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}">
                                    <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}"
                                        data-zoom-image="{{ $bawangPetani->take_img($bawangPetani->img_1) }}" alt="">
                                </div>
                                <div class="pd-o-img-wrap" data-src="{{ $bawangPetani->take_img($bawangPetani->img_2) }}">
                                    <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_2) }}"
                                        data-zoom-image="{{ $bawangPetani->take_img($bawangPetani->img_2) }}" alt="">
                                </div>
                                <div class="pd-o-img-wrap" data-src="{{ $bawangPetani->take_img($bawangPetani->img_3) }}">
                                    <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_3) }}"
                                        data-zoom-image="{{ $bawangPetani->take_img($bawangPetani->img_3) }}" alt="">
                                </div>
                                <div class="pd-o-img-wrap" data-src="{{ $bawangPetani->take_img($bawangPetani->img_4) }}">
                                    <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_4) }}"
                                        data-zoom-image="{{ $bawangPetani->take_img($bawangPetani->img_4) }}" alt="">
                                </div>
                                <div class="pd-o-img-wrap" data-src="{{ $bawangPetani->take_img($bawangPetani->img_5) }}">
                                    <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_5) }}"
                                        data-zoom-image="{{ $bawangPetani->take_img($bawangPetani->img_5) }}" alt="">
                                </div>
                            </div>

                            <span class="pd-text">Klik untuk Zoom</span>
                        </div>
                        <div class="u-s-m-t-15">
                            <div class="slider-fouc">
                                <div id="pd-o-thumbnail">
                                    <div>
                                        <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}" alt="">
                                    </div>
                                    <div>
                                        <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_2) }}" alt="">
                                    </div>
                                    <div>
                                        <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_3) }}" alt="">
                                    </div>
                                    <div>
                                        <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_4) }}" alt="">
                                    </div>
                                    <div>
                                        <img class="u-img-fluid" src="{{ $bawangPetani->take_img($bawangPetani->img_5) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Product Detail Zoom ======-->
                </div>
                <div class="col-lg-7">

                    <!--====== Product Right Side Details ======-->
                    <div class="pd-detail">
                        <div>
                            <span class="pd-detail__review u-s-m-l-4">
                                <a href="">By {{ $bawangPetani->user->name }}</a>
                            </span>
                            <span class="pd-detail__name">{{ $bawangPetani->name }}</span>
                        </div>

                        <div class="u-s-m-t-10">
                            <div class="pd-detail__inline">
                                <span class="pd-detail__stock">Stock: {{ $bawangPetani->stock }} Kg</span>
                                <span class="pd-detail__stock">Panen: {{ date('d-m-Y', strtotime($bawangPetani->harvest_time)) }}</span>
                            </div>
                            <div class="u-s-m-t-15">
                                <p class="pd-detail__preview-desc">Deskripsi:</p>
                                <span class="pd-detail__preview-desc">{{ $bawangPetani->description }}</span>
                            </div>
                            <div>
                                <div class="pd-detail__inline u-s-m-t-15">
                                    @php
                                        $discount = number_format((($bawangPetani->price * $bawangPetani->discount) / 100));
                                        $harga    = $bawangPetani->price - $discount;
                                    @endphp
                                    <span class="pd-detail__price">Rp {{ number_format($harga, 2) }}</span>
                                    <span class="small-title">/kg</span>

                                    <span class="pd-detail__discount">(Diskon {{ $bawangPetani->discount }} %)</span>
                                    <del class="pd-detail__del">{{ number_format($bawangPetani->price, 2) }}</del>
                                </div>
                            </div>

                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">
                                    <span class="pd-detail__click-wrap">
                                        <a>*Maksimal Pemesanan 20 Kg</a>
                                    </span>
                                </div>
                            </div>

                            <div class="u-s-m-b-15">
                                <form action="{{ route('keranjang.keranjang', $bawangPetani->id) }}" method="POST" class="pd-detail__form">
                                    @csrf
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">
                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">
                                                <span class="input-counter__minus fas fa-minus"></span>
                                                <input name="stock" class="input-counter__text input-counter--text-primary-style"
                                                    type="text" value="1" data-min="1" data-max="20">
                                                <span class="input-counter__plus fas fa-plus"></span></div>
                                                {{-- Harga Barang sesudah diskon --}}
                                                <input name="price" style="display: none" value="{{ $harga }}" type="number">
                                                {{-- Pemilik --}}
                                                <input name="user" style="display: none" value="{{ $bawangPetani->user->name }}" type="text">
                                            <!--====== End - Input Counter ======-->
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <button class="btn btn--e-brand-b-2" type="submit">
                                                Masukkan Keranjang
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__label u-s-m-b-8">Kebijakan Produk:</span>
                                <ul class="pd-detail__policy-list">
                                    <li>
                                        <i class="fas fa-check-circle u-s-m-r-8"></i>
                                        <span>Perlindungan Pembeli.</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle u-s-m-r-8"></i>
                                        <span> Pengembalian Dana Penuh jika Anda tidak menerima pesanan Anda.</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle u-s-m-r-8"></i>
                                        <span>Pengembalian diterima jika produk tidak seperti yang dijelaskan.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="u-s-m-t-30">
                                <ul class="pd-social-list">
                                    <li>
                                        <p>Bagikan Melalui:</p>
                                    </li>
                                    <li>
                                        <a class="s-fb--color-hover" href="#"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-insta--color-hover" href="#"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li>

                                        <a class="s-wa--color-hover" href="#"><i
                                                class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-gplus--color-hover" href="#"><i
                                                class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>


        <div class="u-s-p-b-90">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">Rekomendasi Produk Untuk Anda</h1>
                                <span class="section__span u-c-grey">Produk terbaik yang kami punya</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-p">
                            <div class="shop-p__collection">
                                <div class="row is-grid-active">
                                    @forelse ($bawangPetanis as $bawangPetani)
                                    <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                        <div class="product-o product-o--hover-on">
                                            <div class="product-o__wrap">
                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">
                                                    <img class="aspect__img" src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}" alt="">
                                                </a>
                                            </div>

                                            <span class="product-o__category">
                                                <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">Stok: {{ $bawangPetani->stock }} Kg</a><br>
                                                <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">Panen: {{  date('d-m-Y', strtotime($bawangPetani->harvest_time))  }}</a>
                                            </span>

                                            <span class="product-o__name">
                                                <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}" style="font-size: 16px;">{{ $bawangPetani->name }}</a>
                                            </span>
                                            @php
                                                $discount = number_format((($bawangPetani->price * $bawangPetani->discount) / 100))
                                            @endphp
                                            <span class="product-o__price">
                                                <span style="color: #999; font-size: 12px;">Rp. {{ $harga = number_format($bawangPetani->price - $discount, 2) }} / Kg</span>
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
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->
</x-main>
