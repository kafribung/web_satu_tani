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
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="l-f-o__pad-box">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <img style="width: 50%;" src="{{ asset('assets/images/logo/logo st1.png') }}">
                                        <h1 class="gl-h1">Setel Ulang Kata Sandi</h1>
                                    </div>
                                </div>
                                <form class="l-f-o__form" method="POST" action="{{ route('password.email') }}" >
                                    @csrf
                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="reg-email">E-MAIL *</label>
                                        <input name="email" value="{{ old('email') }}" class="input-text input-text--primary-style" type="text"
                                            id="reg-email" placeholder="Contoh: mail@satutani.com">
                                        @error('email')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="gl-inline">
                                        <div class="u-s-m-b-30">
                                            <button class="btn btn--e-brand-b-2" type="submit">Kirim Tautan Atur Ulang Kata Sandi</button>
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
