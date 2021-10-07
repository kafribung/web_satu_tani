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
                            <div class="bgcard">
                                <div class="syarat">
                                    <span> Buat Akun Satu Tani</span>
                                    <p>Sebelum berbelanja di situs web SatuTani, Anda wajib membuat akun
                                        SatuTani terlebih dahulu. Pertama,
                                        masuk ke dalam situs web SatuTani.co.id melalui browser Anda. Kedua,
                                        klik tulisan ‘DAFTAR’ yang berada
                                        di pojok kanan atas halaman awal.</p>
                                    <p> Setelah itu, isi kolom yang tersedia. Anda dapat mendaftar melalui dua
                                        cara, yaitu dengan nomor telepon
                                        dan email. Pastikan semua yang Anda isi sesuai dengan identitas diri.
                                        Jika sudah selesai mengisi, Anda akan
                                        mendapat kode verifikasi yang dikirim ke nomor telepon atau email yang
                                        telah Anda daftarkan.</p>

                                    <span>Cara Belanja di SatuTani Lewat Komputer</span>
                                    <p>Sebelum mulai berbelanja, pastikan Anda telah terdaftar sebagai anggota
                                        SatuTani, seperti langkah yang
                                        disebutkan di atas. Selanjutnya, berikut ini adalah panduan cara belanja
                                        di SatuTani lewat komputer atau
                                        laptop yang Anda miliki.</p>

                                    <ol>
                                        <li>Langkah pertama yang harus Anda lakukan adalah masuk ke dalam situs
                                            web SatuTani.co.id melalui
                                            browser laptop atau komputer. Setelah berhasil masuk, akan muncul
                                            tampilan halaman awal SatuTani.</li>
                                        <li>Selanjutnya, segera menuju kolom ‘Cari di SatuTani’. Di situ, ketik
                                            nama produk yang Anda cari.
                                            Anda bisa langsung mengetik nama produk dan akan muncul rekomendasi
                                            detail yang memudahkan Anda dalam berbelanja.
                                            Jika sudah, tekan tombol enter pada keyboard atau klik tanda cari di
                                            layar.</li>
                                        <li>Pilih produk serta toko yang paling sesuai dengan minat Anda.
                                            Pastikan Anda telah melihat secara
                                            rinci produk yang akan Anda beli. Periksa informasi atau deskripsi
                                            produk dan harga.</li>
                                        <li>Tentukan kuantitas produk yang Anda butuhkan. Kemudian, klik ‘Beli
                                            Sekarang’ jika Anda hanya
                                            membutuhkan satu jenis produk. Jika Anda membutuhkan lebih dari satu
                                            jenis produk, klik ‘Tambah
                                            ke troli’ untuk melanjutkan belanja Anda.</li>
                                        <li>Untuk melanjutkan ke pembayaran, klik ‘Pembayaran’. Jika Anda
                                            mempunyai voucher, masukan kode voucher,
                                            kemudian klik Gunakan. Periksa kembali rincian pesanan Anda, seperti
                                            alamat pengiriman, nomor telepon,
                                            jumlah produk, dan nilai total pesanan. Klik ‘Buat Pesanan
                                            Sekarang’.</li>
                                    </ol>
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
