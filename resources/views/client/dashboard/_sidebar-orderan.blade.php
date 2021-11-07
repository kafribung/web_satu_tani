<div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
    <div class="dash__pad-2">
        <div class="manage-o">
            <div class="manage-o__timeline">
                <div class="timeline-row">
                    <div class="col-lg-3 u-s-m-b-30">
                        <a href="{{ route('pesanan.index') }}">
                            <div class="timeline-step">
                                <div class="timeline-l-i {{ request()->routeIs('pesanan.index') ? 'timeline-l-i--finish' : ''}}">
                                    <span class="timeline-circle"></span>
                                </div>
                                <span class="timeline-text">Menunggu Pembayaran</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 u-s-m-b-30">
                        <a href="{{ route('diproses.index') }}">
                            <div class="timeline-step">
                                <div class="timeline-l-i {{ request()->routeIs('diproses.index') ? 'timeline-l-i--finish' : '' }}">
                                    <span class="timeline-circle"></span>
                                </div>
                                <span class="timeline-text">Diproses</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 u-s-m-b-30">
                        <a href="{{ route('dikirim.index') }}">
                            <div class="timeline-step">
                                <div class="timeline-l-i {{ request()->routeIs('dikirim.index') ? 'timeline-l-i--finish' : '' }}">
                                    <span class="timeline-circle"></span>
                                </div>
                                <span class="timeline-text">Dikirim</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 u-s-m-b-30">
                        <a href="pesanan-selesai.html">
                            <div class="timeline-step">
                                <div class="timeline-l-i">
                                    <span class="timeline-circle"></span>
                                </div>
                                <span class="timeline-text">Selesai</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
