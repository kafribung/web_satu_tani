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
                                <div class="syarat">
                                    <span> Apa itu Satu Tani?</span>
                                    <p>Satu Tani merupakan aplikasi berbasis layanan/jasa yang menghubungkan
                                        antara petani dan
                                        costumer. Costumer dapat membeli bawang secara langsung ke petani
                                        menggunakan aplikasi
                                        SatuTani.</p>

                                    <span>Bagaimana dengan biaya yang dikenakan untuk penggunaan jasa layanan
                                        Satu Tani?</span>
                                    <p>Anda akan memiliki pilihan paket harga sebelum memulai belanja Anda
                                        bersama Satu Tani.
                                        Biaya paket sangat terjangkau, dan Anda mendapatkan lebih banyak
                                        dukungan dari kami untuk
                                        profit usaha yang lebih maksimal. Untuk informasi lanjut, Mohon cek
                                        paket harga yang kami
                                        tawarkan</p>

                                    <span>Saya lupa dengan detail & password Satu Tani saya. Apa yang harus saya
                                        lakukan?</span>
                                    <p>Apabila Anda lupa dengan password, terdapat link “Lupa Password” ketika
                                        Anda akan login.
                                        Anda akan dipandu untuk verifikasi dan reset password yang akan dikirim
                                        ke alamat email Anda.
                                        Apabila Anda bahkan melupakan user Anda sendiri, Anda dapat mencari
                                        ulang email konfirmasi
                                        pendaftaran yang sebelumnya dikirimkan saat registrasi. Apabila masih
                                        ada kesulitan, kami
                                        sarankan untuk menulis ke SatuTani1@Gmail.com.</p>

                                    <span>Saya sudah mengupload produk-produk saya, dikatakan bahwa situs saya
                                        sedang down.
                                        Apa yang terjadi?</span>
                                    <p>Hal ini disebabkan karena Anda belum meng “Publish” barang anda. Silakan
                                        ke store
                                        management Anda dan pilih ‘penjualan’ untuk mendapatkan eksekusi
                                        publikasi barang Anda. </p>

                                    <span>Metode pembayaran apa saja yang bisa diterima di Satu Tani?</span>
                                    <p>Kami bekerja keras membawakan fasilitas pembayaran melalui Debit
                                        Transfer, PayPal, Visa,
                                        MasterCard Credit/Debit cards dan Internet Banking. Jika Anda ingin
                                        mendaftarkan pembayaran
                                        dengan cara lainnya, silahkan hubungi customer support kami.</p>

                                    <span>Jasa pengiriman apa saja yang telah terintegrasi dengan Satu
                                        Tani?</span>
                                    <p>Untuk saat ini, Satu Tani telah menjalin kerjasama dengan mitra kami
                                        sendiri guna memungkinkan
                                        Anda menjangkau pelanggan Anda di seluruh Indonesia. Kami juga
                                        menyediakan layanan untuk
                                        pelacakan harga pengiriman secara otomatis dan mutakhir sehingga Anda
                                        tidak butuh
                                        memeriksa secara manual seperti biasanya.</p>

                                    <span>Bagaimana dengan Testimonial pembeli Satu Tani?</span>
                                    <p>Ya bisa, lakukan melalui settingan Website → Halaman Web & Artikel →
                                        Testimonial. Anda juga
                                        dapat memposisikan link Testimonial di bagian menu atas maupun footer
                                        sesuai selera.
                                    </p>

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
