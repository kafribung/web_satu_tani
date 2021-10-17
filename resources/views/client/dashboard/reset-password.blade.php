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
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    @if (session('message'))
                                    <p style="color: #28A745">{{ session('message') }}</p>
                                    @endif

                                    <h1 class="dash__h1 u-s-m-b-14">Ubah Password</h1>
                                    <span class="dash__text u-s-m-b-30">Silahkan lengkapi form di bawah</span>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="dash-edit-p" action="{{ route('reset.password') }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="password">KATA SANDI LAMA*</label>
                                                        <input name="password" class="input-text input-text--primary-style" type="password"
                                                            id="password" placeholder="Masukkan Kata Sandi Lama">
                                                        @error('password')
                                                        <p style="color: #bb2124">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="password_new">KATA SANDI BARU*</label>
                                                        <input name="password_new" class="input-text input-text--primary-style" type="password"
                                                            id="password_new" placeholder="Masukkan Kata Sandi Baru">
                                                        @error('password_new')
                                                        <p style="color: #bb2124">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <button class="btn btn--e-brand-b-2" type="submit">SIMPAN</button>
                                            </form>
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
</x-main>
