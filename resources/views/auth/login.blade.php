<x-main>
    @once
        @push('css_app')
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        @endpush
    @endonce

    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row row--center">
                    <div class="col-lg-6 col-md-8 u-s-m-b-30">
                        <div class="l-f-o">
                            <div class="l-f-o__pad-box">
                                @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <img style="width: 50%;" src="{{ asset('assets/images/logo/logo st1.png') }}">
                                        <h1 class="gl-h1">Selamat Datang di Satutani</h1>
                                        <h5 class="h6">Masuk Untuk Melanjutkan</h5>
                                        <span class="gl-text u-s-m-b-30"> Belum punya akun? <b><a class="gl-link" href="{{ route('register') }}">Daftar di sini.</a></b></span>
                                    </div>
                                </div>
                                <form class="l-f-o__form" method="POST" action="{{ route('login') }}" >
                                    @csrf
                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="reg-email">E-MAIL *</label>
                                        <input name="email" value="{{ old('email') }}" class="input-text input-text--primary-style" type="text"
                                            id="reg-email" placeholder="Contoh: mail@satutani.com">
                                        @error('email')
                                        <p style="color: #bb2124" class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="reg-password">KATA SANDI *</label>
                                        <input name="password" class="input-text input-text--primary-style" type="password"
                                            id="reg-password" placeholder="Masukkan Kata Sandi">
                                        @error('password')
                                        <p style="color: #bb2124" class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="gl-inline">
                                        <div class="u-s-m-b-30">
                                            <button class="btn btn--e-brand-b-2" type="submit">MASUK</button>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <div class="u-s-m-b-30">
                                            <a class="gl-link"href="{{ route('password.request') }}">Lupa Kata Sandi?</a>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="u-s-m-b-30">
                                        <div class="check-box">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember-me">
                                            <div class="check-box__state check-box__state--primary">
                                                <label class="check-box__label" for="remember-me">Ingat saya</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="u-s-m-b-30 section__text-wrap">
                                        <div class="title-line">
                                            <div class="title-name">Atau</div>
                                        </div>
                                    </div>

                                    <div class="gl-s-api">
                                        <div class="u-s-m-b-15">
                                            <div class="u-s-m-b-15">
                                                <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>
                                                    <span>Masuk dengan Google</span>
                                                </button>
                                            </div>
                                            <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>
                                                <span>Masuk dengan Facebook</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
</x-main>
