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
                            <div
                                class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14">Kelola Akun Saya</h1>

                                    <span class="dash__text u-s-m-b-30">
                                        Dari Dasbor Akun Saya, Anda memiliki
                                        kemampuan untuk melihat cuplikan aktivitas akun terbaru dan memperbarui
                                        informasi akun Anda.
                                        Pilih tautan di bawah untuk melihat atau mengedit informasi
                                    </span>
                                    {{-- <div class="row">
                                        <div class="col-lg-4 u-s-m-b-30">
                                            <div
                                                class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">FOTO</h2>

                                                    <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                        <a href="#">Ganti</a></div>

                                                    <center>
                                                        <img src="images/ilustrasi/illust1.png" alt="profil"
                                                            style="border-radius: 100%;" width="60%">
                                                    </center>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 u-s-m-b-30">
                                            <div
                                                class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">PROFIL</h2>
                                                    <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                        <a href="dash-edit-profile.html">Edit</a></div>

                                                    <span class="dash__text">John Doe</span>

                                                    <span class="dash__text">johndoe@domain.com</span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 u-s-m-b-30">
                                            <div
                                                class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">ALAMAT</h2>

                                                    <span class="dash__text-2 u-s-m-b-8">Alamat Pengiriman
                                                        Default</span>
                                                    <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                        <a href="dash-address-book.html">Edit</a></div>

                                                    <span class="dash__text">4247 Ashford Drive Virginia -
                                                        VA-20006 - USA</span>

                                                    <span class="dash__text">(+0) 900901904</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
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
