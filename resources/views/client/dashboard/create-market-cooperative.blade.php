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
                                        <form class="dash__pad-2" action="{{ route('buat-toko.koperasi') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <center>
                                                <h1 class="dash__h1 u-s-m-b-14" style="margin-bottom: 80px;">
                                                    Upload Foto SK Koperasi
                                                </h1>
                                                <a id="open-img-upload" class="btn btn-primary fas fa-upload"
                                                    style="padding: 12px 15px; font-size: 16px;"> &nbsp; &nbsp;
                                                    Upload Foto
                                                </a>
                                                <input type="file" name="img" accept="image/jpeg" id="img-upload"  style="display:none"/>
                                                <span class="dash__text u-s-m-b-30"
                                                    style="margin-top: 10px;">Foto SK Koperasi Max 2 Mb.
                                                </span>

                                                @error('img')
                                                <span class="dash__text u-s-m-b-30"
                                                    style="margin-top: 5px; color: red">{{ $message }}
                                                </span>
                                                @enderror

                                            </center>

                                            <h1 class="dash__h1 u-s-m-b-14"
                                                style="margin-top: 120px; padding: 0 20px;">Persyaratan</h1>
                                            <ul>
                                                <li>Foto SK Koperasi asli</li>
                                                <li>Informasi pada SK Koperasi terlihat jelas dan tidak ada yang buram
                                                    maupun terpotong</li>
                                                <li>Tidak ada pantulan cahaya dan bayangan</li>
                                                <li>Ukuran gambar maximal 1 MB</li>
                                            </ul>

                                            <button class="btn2 btn-primary" type="submit">Lanjutkan</button>
                                            <a class="btn1 btn-primary" href="{{ route('dashboard') }}">Batal</a>
                                        </form>
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
