<x-main>
    @slot('cssTambahan')
    <link rel="stylesheet" href="{{ asset('assets/css/bantupengguna.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pesanan.css') }}">
    @endslot
    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        @include('client.dashboard._sidebar-dashboard')
                        <div class="col-lg-9 col-md-12">
                            <div
                                class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <div class="manage-o">
                                        <div class="manage-o__timeline">
                                            <div class="timeline-row">
                                                <div class="col-lg-3 u-s-m-b-30">
                                                    <a href="pesanan-menunggu-pembayaran.html">
                                                        <div class="timeline-step">
                                                            <div class="timeline-l-i timeline-l-i--finish">
                                                                <span class="timeline-circle"></span>
                                                            </div>
                                                            <span class="timeline-text">Menunggu Pembayaran</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 u-s-m-b-30">
                                                    <a href="pesanan-diproses.html">
                                                        <div class="timeline-step">
                                                            <div class="timeline-l-i">
                                                                <span class="timeline-circle"></span>
                                                            </div>
                                                            <span class="timeline-text">Diproses</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 u-s-m-b-30">
                                                    <a href="pesanan-dikirim.html">
                                                        <div class="timeline-step">
                                                            <div class="timeline-l-i">
                                                                <span class="timeline-circle"></span>
                                                            </div>
                                                            <span class="timeline-text">Dikirim</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 u-s-m-b-30">
                                                    <a href="pesanan-selesai.html">
                                                        <div class="timeline-step">
                                                            <div class="timeline-l-i">
                                                                <span class="timeline-circle"></span>
                                                            </div>
                                                            <span class="timeline-text">Selesai</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div
                                        class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Pesanan Saya</h1>
                                            <span class="dash__text u-s-m-b-30">Semua pesanan yang menunggu pembayaran, silahkan transfer ke nomor dengna biaya: Rp.{{ number_format($checkouts->sum('total') ?? '')  }}.</span>
                                            <p class="dash__h2 u-s-m-b-14">Transfer ke BRI(Adly 123 3443 5454).</p>
                                            <div class="m-order__list">
                                                @foreach ($checkouts as $checkout)
                                                    {{-- @foreach ($checkout as $product)
                                                        {{ $product }}
                                                    @endforeach --}}
                                                    {{ dd(json_decode($checkout->products) ) }}
                                                    {{-- @foreach ($checkout->products as $item)
                                                    {{ $item }}

                                                    @endforeach --}}

                                                {{-- <div class="m-order__get">
                                                    <div class="manage-o__header u-s-m-b-30">
                                                        <div class="dash-l-r">
                                                            <div>
                                                                <div class="manage-o__text-2 u-c-secondary">
                                                                    Order #305423126</div>
                                                                <div class="manage-o__text u-c-silver">Dipesan
                                                                    pada 26 Oct 2016 09:08:37</div>
                                                            </div>
                                                            <div>
                                                                <div class="dash__link dash__link--brand">
                                                                    <a href="dash-manage-order.html">Lihat</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="manage-o__description">
                                                        <div class="description__container">
                                                            <div class="description__img-wrap">
                                                                <img class="u-img-fluid"
                                                                    src="images/product/electronic/product3.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="description-title">Varietas A</div>
                                                        </div>
                                                        <div class="description__info-wrap">
                                                            <div>
                                                                <span class="manage-o__text-2 u-c-silver">Kuantiti:
                                                                    <span class="manage-o__text-2 u-c-brand">1 Ton</span>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="manage-o__text-2 u-c-silver">Total:
                                                                <span class="manage-o__text-2 u-c-brand"> Rp 20.000.000</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->
</x-main>
