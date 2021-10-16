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
                            <form>
                            <div class=" bgcard">
                                <h3>Informasi Produk</h3>
                                <div class="bings">
                                        {{-- Foto Produk --}}
                                        <div class="row mb-3">
                                            <label for="img_1" class="col-sm-3 col-form-label">*Foto Produk</label>
                                            <div class="col-sm-9">
                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4">+</a>
                                                    <input type="file" name="img_1" accept="image/jpeg" id="img_1"/>
                                                    <p>Gambar Utama</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4">+</a>
                                                    <input type="file" name="img_2" accept="image/jpeg" id="img_2"/>
                                                    <p>Foto 1</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4">+</a>
                                                    <input type="file" name="img_3" accept="image/jpeg" id="img_3"/>
                                                    <p>Foto 2</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4">+</a>
                                                    <input type="file" name="img_4" accept="image/jpeg" id="img_4"/>
                                                    <p>Foto 3</p>
                                                </div>

                                                <div class="bingkai">
                                                    <a class="mini-link2 btn--e-brand-b-4">+</a>
                                                    <input type="file" name="img_5" accept="image/jpeg" id="img_5"/>
                                                    <p>Foto 4</p>
                                                </div>
                                            </div>
                                            @error('img_1')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        {{-- Nama Produk --}}
                                        <div class="row mb-3">
                                            <label for="name" class="col-sm-3 col-form-label">*Nama Produk</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Masukkan Nama Produk">
                                            </div>

                                        </div>

                                        {{-- Deskripsi Produk --}}
                                        <div class="row mb-3">
                                            <label for="description" class="col-sm-3 col-form-label">*Deskripsi Produk</label>
                                            <div class="col-sm-9">
                                                <textarea type="comment" name="description" class="form-control" id="description" placeholder="Masukkan Deskripsi Produk">{{ old('description') }}</textarea>
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label for="harvest_time" class="col-sm-3 col-form-label">*Waktu Panen</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="harvest_time" value="{{ old('harvest_time') }}" class="form-control" id="harvest_time" placeholder="Masukkan Tanggal Panen">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="price" class="col-sm-3 col-form-label">*Harga Produk</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="price" placeholder="Rp. 0">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="stock" class="col-sm-3 col-form-label">*Stok Produk(Kg)</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="stock" value="{{ old('stock') }}" maxlength="2" class="form-control" id="stock" placeholder="0">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="discount" class="col-sm-3 col-form-label">*Diskon</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="discount" value="{{ old('discount') }}" maxlength="2" class="form-control" id="discount" placeholder="0">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <center>
                                <a class="mini-link3 btn--e-brand-b-3" href="#">POSTING</a>
                            </center>
                            </form>

                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Dashboard ======-->
</x-main>
