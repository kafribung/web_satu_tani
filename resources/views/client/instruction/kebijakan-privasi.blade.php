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
                        <div class="col-lg-9 col-md 12">
                            <div class=" bgcard">
                                <div class="syarat">
                                    <h5>PENDAHULUAN</h5>
                                    <ol>
                                        <li>Selamat datang di platform SATUTANI. Silakan baca Syarat Layanan
                                            berikut dengan cermat
                                            sebelum menggunakan Situs ini atau membuka akun SATUTANI ("Akun")
                                            agar anda
                                            mengetahui tentang hak dan kewajiban hukum anda. "Layanan" yang kami
                                            berikan atau
                                            sediakan termasuk (a) Situs, (b) layanan yang disediakan oleh Situs
                                            dan oleh perangkat lunak
                                            klien SATUTANI yang tersedia melalui Situs, dan (c) semua informasi,
                                            halaman tertaut, fitur,
                                            data, teks, gambar, foto, grafik, musik, suara, video (termasuk
                                            siaran langsung (live stream),
                                            pesan, tag, konten, pemrograman, perangkat lunak, layanan aplikasi
                                            (termasuk, dengan tidak
                                            terbatas pada, setiap layanan aplikasi mobile) atau materi lainnya
                                            yang tersedia melalui Situs
                                            atau layanan terkait ("Konten"). Setiap fitur baru yang ditambahkan
                                            atau memperbesar
                                            Layanan juga tunduk pada Syarat Layanan ini. Syarat Layanan ini
                                            mengatur penggunaan
                                            Layanan yang disediakan oleh SATUTANi</li>

                                        <li>Layanan termasuk layanan platform online yang menyediakan tempat dan
                                            peluang untuk
                                            penjualan barang antara pembeli ("Pembeli") dan penjual ("Penjual")
                                            (secara bersama-sama
                                            disebut “anda”, "Pengguna" atau "Para Pihak"). Kontrak penjualan
                                            yang sebenarnya adalah
                                            secara langsung antara Pembeli dan Penjual dan SATUTANI bukan
                                            merupakan pihak di
                                            dalamnya atau setiap kontrak lainnya antara Pembeli dan Penjual
                                            serta tidak bertanggung
                                            jawab sehubungan dengan kontrak tersebut. Para Pihak dalam transaksi
                                            tersebut akan
                                            sepenuhnya bertanggung jawab untuk kontrak penjualan antara mereka,
                                            daftar barang,
                                            garansi pembelian dan sebagainya. SATUTANI tidak terlibat dalam
                                            transaksi antara Pengguna.
                                            SATUTANI dapat atau tidak dapat melakukan penyaringan awal terhadap
                                            Pengguna atau
                                            Konten atau informasi yang diberikan oleh Pengguna. SATUTANI berhak
                                            untuk menghapus
                                            setiap Konten atau informasi yang diposting oleh anda di Situs
                                            sesuai dengan Bagian 6.4
                                            di sini. SATUTANI tidak dapat memastikan bahwa Pengguna akan
                                            benar-benar menyelesaikan
                                            transaksi</li>

                                        <li>Sebelum menjadi Pengguna Situs, anda harus membaca dan menerima
                                            semua syarat dan
                                            ketentuan dalam, dan yang berkaitan dengan, Syarat Layanan ini dan
                                            anda harus memberikan
                                            persetujuan atas pemrosesan data pribadi anda sebagaimana dijelaskan
                                            dalam Kebijakan
                                            Privasi yang terkait dengan Syarat Layanan ini.</li>

                                        <li>SATUTANI berhak untuk mengganti, mengubah, menangguhkan atau
                                            menghentikan semua
                                            atau bagian apapun dari Situs ini atau Layanan setiap saat atau
                                            setelah memberikan
                                            pemberitahuan sebagaimana dipersyaratkan oleh undang-undang dan
                                            peraturan setempat.
                                            SATUTANI dapat meluncurkan Layanan tertentu atau fitur tertentu
                                            dalam versi beta, yang
                                            mungkin tidak berfungsi dengan baik atau sama seperti versi akhir,
                                            dan kami tidak
                                            bertanggung jawab dalam hal demikian. SATUTANI juga dapat membatasi
                                            fitur tertentu atau
                                            membatasi akses anda ke bagian atau seluruh Situs atau Layanan atas
                                            kebijakannya sendiri
                                            dan tanpa pemberitahuan atau kewajiban.</li>

                                        <li>SATUTANI berhak untuk menolak memberikan akses ke Situs atau Layanan
                                            kepada anda atau
                                            mengizinkan anda untuk membuka Akun dengan alasan apapun.</li>

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
