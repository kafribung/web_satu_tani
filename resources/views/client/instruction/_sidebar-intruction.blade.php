<div class="col-lg-3 col-md-12">
    <!--====== Dashboard Features ======-->
    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
        <div class="dash__pad-1">
            @auth
            <span class="dash__text u-s-m-b-16">Halo, {{ auth()->user()->name }}</span>
            @endauth

            <ul class="ah-list ah-list--design5 ah-list--link-color-secondary">
                <li>
                    <a href="{{ route('syarat-dan-ketentuan') }}" class="{{ request()->routeIs('syarat-dan-ketentuan') ? 'active' : '' }} ">Syarat & Ketentuan</a>
                </li>
                <li>
                    <a href="{{ route('kebijakan-privasi') }}" class="{{ request()->routeIs('kebijakan-privasi') ? 'active' : '' }} ">Kebijakan Privasi</a>
                <li>
                    <a href="{{ route('tanya-jawab') }}" class="{{ request()->routeIs('tanya-jawab') ? 'active' : '' }} ">Tanya Jawab</a>
                </li>
                <li>
                    <a href="panduan.html">Panduan</a>
                <li>
                    <a href="tentang-kami.html">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</div>
