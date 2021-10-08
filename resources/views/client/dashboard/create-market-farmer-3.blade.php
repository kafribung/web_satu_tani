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
                                                        <img src="{{ asset('assets/images/akunbisnis/bisnis1.png') }}" alt="bisnis">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class=" bgcard">
                                        <div class="posting">
                                            <center>
                                                <h3>Sedang Diproses</h3>
                                                <p style="padding: 0 70px;">Halo {{ auth()->user()->name }}, verifikasi akun satutani
                                                    kamu sedang di proses.
                                                    Mohon tunggu konfirmasi di email kamu 3x24 jam yah. Terima
                                                    kasih</p>
                                                <a class="btn btn-primary" href="{{ route('dashboard') }}"
                                                    style="margin-top: 50px;">Oke, Siap</a>
                                            </center>
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
