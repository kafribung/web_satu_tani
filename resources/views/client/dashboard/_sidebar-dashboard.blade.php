<div class="col-lg-3 col-md-12">
    <!--====== Dashboard Features ======-->
    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
        <div class="dash__pad-1">
            @auth
            <span class="dash__text u-s-m-b-16">Halo, {{ auth()->user()->name }}</span>
            @endauth

            <ul class="ah-list ah-list--design5 ah-list--link-color-secondary">
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} ">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }} {{ request()->routeIs('profil.edit') ? 'active' : '' }} {{ request()->routeIs('reset.password') ? 'active' : '' }}">
                        Profil Saya
                    </a>
                <li>
                    <a href="{{ route('tanya-jawab') }}" class="{{ request()->routeIs('tanya-jawab') ? 'active' : '' }} ">Tanya Jawab</a>
                </li>
                <li>
                    <a href="{{ route('panduan') }}" class="{{ request()->routeIs('panduan') ? 'active' : '' }} ">Panduan</a>
                <li>
                    <a href="{{ route('tentang-kami') }}" class="{{ request()->routeIs('tentang-kami') ? 'active' : '' }} ">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</div>
