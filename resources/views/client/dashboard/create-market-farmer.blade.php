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
                            <div
                                class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <div class="manage-o">
                                        <div class="manage-o__timeline">
                                            <div class="timeline-row">
                                                <div class="col-lg-12 u-s-m-b-30">
                                                    <div class="bisnis-tani">
                                                        <img src="{{ asset('assets/images/akunbisnis/bisnis0.png') }}" alt="bisnis">
                                                    </div>
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
                                            <center>
                                                <h1 class="dash__h1 u-s-m-b-14" style="margin-bottom: 80px;">
                                                    Upload Foto KTP Anda
                                                </h1>
                                                <a id="open-img-upload" class="btn btn-primary fas fa-upload"
                                                    style="padding: 12px 15px; font-size: 16px;"> &nbsp; &nbsp;
                                                    Upload Foto
                                                </a>
                                                <input type="file" id="img-upload" style="display:none"/>
                                                <span class="dash__text u-s-m-b-30"
                                                    style="margin-top: 10px;">Semua pesanan yang menunggu
                                                    pembayaran.
                                                </span>
                                            </center>

                                            <h1 class="dash__h1 u-s-m-b-14"
                                                style="margin-top: 120px; padding: 0 20px;">Persyaratan</h1>
                                            <ul>
                                                <li>Foto e-KTP asli</li>
                                                <li>Informasi pada e-KTP terlihat jelas dan tidak ada yang buram
                                                    maupun terpotong</li>
                                                <li>Tidak ada pantulan cahaya dan bayangan</li>
                                                <li>Ukuran gambar maximal 1 MB</li>
                                            </ul>
                                            <a class="btn2 btn-primary"
                                                href="akun-bisnis-daftar-tani1.html">Lanjutkan</a>
                                            <a class="btn1 btn-primary" href="akun-bisnis-daftar.html">Batal</a>

                                        </div>
                                    </div>
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

    @push('script')
        <script>
            $('#open-img-upload').click(function(){ $('#img-upload').trigger('click'); });
        </script>
    @endpush
</x-main>
