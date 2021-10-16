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
                                <h3>Informasi Produk</h3>
                                <div class="bings">

                                    <form>

                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">*Foto
                                                Produk</label>
                                            <div class="col-sm-9">
                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4"
                                                        href="checkout.html">+</a>
                                                    <p>Tambah Gambar</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4"
                                                        href="checkout.html">+</a>
                                                    <p>Foto 1</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4"
                                                        href="checkout.html">+</a>
                                                    <p>Foto 2</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4"
                                                        href="checkout.html">+</a>
                                                    <p>Foto 3</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4"
                                                        href="checkout.html">+</a>
                                                    <p>Foto 4</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">*Nama
                                                Produk</label>
                                            <div class="col-sm-9">
                                                <input type="name" class="form-control" id="inputEmail3"
                                                    placeholder="Masukkan Nama Produk">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">*Deskripsi
                                                Produk</label>
                                            <div class="col-sm-9">
                                                <textarea type="comment" class="form-control" id="inputEmail3"
                                                    placeholder="Masukkan Deskripsi Produk"> </textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label">*Kategori</label>

                                            <div class="col-sm-3">
                                                <select class="form-control"
                                                    aria-label="Default select example">
                                                    <option selected>Sudah DIbersihkan</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">*Waktu
                                                Panen</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="inputEmail3"
                                                    placeholder="Masukkan Tanggal Panen">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>





                            <div class=" bgcard">
                                <h3>Informasi Penjualan</h3>
                                <div class="bings">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">*Harga
                                                Produk</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="inputEmail3"
                                                    placeholder="Rp. 0">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">*Stok
                                                Produk</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="inputPassword3"
                                                    placeholder="0">
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control"
                                                    aria-label="Default select example">
                                                    <option selected>Kilogram</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">*Minimal
                                                Pembelian</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="inputPassword3"
                                                    placeholder="0">
                                            </div>

                                            <div class="col-sm-3">
                                                <select class="form-control"
                                                    aria-label="Default select example">
                                                    <option selected>Kilogram</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <center>
                                <a class="mini-link3 btn--e-brand-b-3" href="#">POSTING</a>
                            </center>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Dashboard ======-->
</x-main>
