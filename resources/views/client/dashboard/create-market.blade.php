<x-main>
    @slot('cssTambahan')
    <link rel="stylesheet" href="{{ asset('assets/css/bantupengguna.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pesanan.css') }}">
    @endslot
    <!--====== Dashboard ======-->
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        @include('client.dashboard._sidebar-dashboard')
                        <div class="col-lg-9 col-md-12">
                            <div class=" bgcard">
                                <div class="posting">
                                    <center>
                                        <h3>Profil Akun Bisnis</h3>
                                        <p style="padding: 0 70px;">Lengkapi data kamu dan verifikasi berkas
                                            agar kamu dapat memasarkan hasil panenmu di Satutani</p>
                                        <a class="btn btn-primary" href="{{ route('buat-toko-petani') }}"
                                            style="margin-top: 50px;">Petani</a>
                                        <a class="btn btn-primary" href="akun-bisnis-daftar-koperasi.html"
                                            style="margin-top: 50px;">Koperasi</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Dashboard ======-->
</x-main>
