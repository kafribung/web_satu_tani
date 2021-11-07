<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('dashboard_assets/images/user.png') }}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</div>
                <div class="email">{{ auth()->user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>Sign Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li  class="{{ request()->routeIs('admin.admin.index') ? 'active' : '' }} {{ request()->is('admin/admin/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.admin.index') }}">
                        <i class="material-icons">text_fields</i>
                        <span>Admin</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.user.index') ? 'active' : '' }} {{ request()->is('admin/user/*') ? 'active' : '' }} {{ request()->routeIs('admin.petani.index') ? 'active' : '' }} {{ request()->is('admin/petani/*') ? 'active' : '' }} {{ request()->routeIs('admin.koperai.index') ? 'active' : '' }} {{ request()->is('admin/koperai/*') ? 'active' : '' }}">
                    <a class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Pengguna</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('admin.user.index') ? 'active' : '' }} {{ request()->is('admin/user/*') ? 'active' : '' }}">
                            <a href="{{ route('admin.user.index') }}">
                                <span>User</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('admin.petani.index') ? 'active' : '' }} {{ request()->is('admin/petani/*') ? 'active' : '' }}">
                            <a href="{{ route('admin.petani.index') }}">
                                <span>Petani</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('admin.koperai.index') ? 'active' : '' }} {{ request()->is('admin/koperai/*') ? 'active' : '' }}">
                            <a href="{{ route('admin.koperai.index') }}">
                                <span>Koperasi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('admin.validasi.index') ? 'active' : '' }} {{ request()->is('admin/validasi/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.validasi.index') }}">
                        <i class="material-icons">layers</i>
                        <span>Validasi</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.waiting-for-payment.index') ? 'active' : '' }} {{ request()->routeIs('admin.prosess-payment.index') ? 'active' : '' }} {{ request()->routeIs('admin.send-payment.index') ? 'active' : '' }} {{ request()->routeIs('admin.finish-payment.index') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>Pembayaran</span>
                    </a>
                    <ul class="ml-menu">
                        <li >
                            <a href="{{ route('admin.waiting-for-payment.index') }}">Menunggu Pembayaran</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.prosess-payment.index') }}">Di Proses</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.send-payment.index') }}">Di Kirim</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.finish-payment.index') }}">Selesai</a>
                        </li>
                    </ul>
                </li>
                <li  class="{{ request()->routeIs('admin.bawang-eceran.index') ? 'active' : '' }} {{ request()->is('admin/bawang-eceran/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.bawang-eceran.index') }}">
                        <i class="material-icons">assignment</i>
                        <span>Bawang Eceran</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; {{ date('Y') }} <a href="javascript:void(0);">Admin - Satu Tani</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>
