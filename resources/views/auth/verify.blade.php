<x-main>
    @once
        @push('css_app')
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        @endpush
    @endonce

    <!--====== Register ======-->
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="container">
                <div class="row row--center">
                    <div class="col-lg-6 col-md-8 u-s-m-b-30">
                        <div class="l-f-o">
                            <div class="l-f-o__pad-box u-s-m-b-60">
                                <div class="section__intro u-s-m-b-60">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section__text-wrap">
                                                    <h1 class="section__heading u-c-secondary">Verifikasi alamat email Anda</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="l-f-o__form">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                                        </div>
                                    @endif
                                    <span class="gl-text u-s-m-b-30">
                                        Sebelum melanjutkan, harap periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email,
                                    </span>
                                    <a  class="gl-link" onclick="event.preventDefault(); document.getElementById('verification-resend').submit();">Klik di sini untuk meminta verifikasi email</a>
                                    <form class="d-inline" method="POST" id="verification-resend" class="d-none" action="{{ route('verification.resend') }}">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Register ======-->
</x-main>
