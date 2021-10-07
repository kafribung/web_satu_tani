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
                                    <h1 class="dash__h1 u-s-m-b-14">Profil Saya</h1>

                                    <span class="dash__text u-s-m-b-30">Informasi tentang kamu. Kamu bisa
                                        mengubahnya kapan saja.
                                    </span>

                                    <div class="row">
                                        <div class="col-lg-4 u-s-m-b-30">
                                            <h2 class="dash__h2 u-s-m-b-8">Nama Lengkap</h2>
                                            <span class="dash__text">{{ $user->name }}</span>
                                        </div>

                                        <div class="col-lg-4 u-s-m-b-30">
                                            <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>
                                            <span class="dash__text">{{ $user->email }}</span>
                                        </div>

                                        <div class="col-lg-4 u-s-m-b-30">
                                            <h2 class="dash__h2 u-s-m-b-8">No. Hp</h2>
                                            <span class="dash__text">{{ $user->no_hp }}</span>
                                        </div>

                                        <div class="col-lg-4 u-s-m-b-30">
                                            <h2 class="dash__h2 u-s-m-b-8">Tanggal Lahir</h2>
                                            <span class="dash__text">{{ $user->date_birth }}</span>
                                        </div>

                                        <div class="col-lg-4 u-s-m-b-30">
                                            <h2 class="dash__h2 u-s-m-b-8">Jenis Kelamin</h2>
                                            <span class="dash__text">{{ ($user->gender == 'pria' ? 'Laki-laki' : 'Wanita') }}</span>
                                        </div>

                                        <div class="col-lg-4 u-s-m-b-30">
                                            <h2 class="dash__h2 u-s-m-b-8">Alamat</h2>
                                            <span class="dash__text">{{ $user->address }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="u-s-m-b-16">
                                                <a class="dash__custom-link btn--e-transparent-brand-b-2"
                                                    href="{{ route('profil.edit') }}">Ubah Profil</a>
                                                <a class="dash__custom-link btn--e-brand-b-2" href="{{ route('reset.password') }}">Ubah
                                                    Kata Sandi</a>
                                            </div>
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
