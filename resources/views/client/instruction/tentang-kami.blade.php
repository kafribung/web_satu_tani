<x-main>
    @slot('cssTambahan')
    <link rel="stylesheet" href="{{ asset('assets/css/bantupengguna.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pesanan.css') }}">
    @endslot
    <!--====== Syarat dan Ketentuan ======-->
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        @include('client.instruction._sidebar-intruction')
                        <div class="col-lg-9 col-md-12">
                            <div class=" bgcard">
                                <div class="tentangkami">
                                    <img src="{{ asset('assets/images/logo/logo st1.png') }}" alt="satutani">
                                    <h3>Haiii.. Welcome to <span>SatuTani.</span></h3>
                                    <p>Haiii.. Welcome to SatuTani.
                                        SatuTani adalah sebuah platform yang menghubungkan pembeli dan petani
                                        bawang merah secara langsung.
                                        Dengan tujuan awal, SatuTani diciptakan agar dapat memberdayakan
                                        masyarakat tani dengan membantu
                                        memasarkan hasil panen mereka menggunakan jaringan internet.<br>
                                        Platform ini diharapkan dapat mempermudah petani serta pembeli dalam
                                        menjual dan membeli bawang
                                        merah dengan cepat dan mudah melalui platform SatuTani.<br>
                                        Kami berusaha memberikan layanan terbaik dengan menjunjung tinggi
                                        kejujuran,ketepatan dan profesionalisme dalam bisnis kami.<br>
                                        Semoga layanan kami bisa membantu dan mempermudah anda
                                        Salam SatuTani.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Syarat dan Ketentuan ======-->
</x-main>
