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
                <li class="{{ request()->routeIs('admin.waiting-for-payment.index') ? 'active' : '' }} {{ request()->routeIs('admin.prosess-payment.index') ? 'active' : '' }} {{ request()->routeIs('admin.send-payment.index') ? 'active' : '' }}">
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
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Forms</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-examples.html">Form Examples</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a href="pages/forms/editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Tables</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/tables/normal-tables.html">Normal Tables</a>
                        </li>
                        <li>
                            <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                        </li>
                        <li>
                            <a href="pages/tables/editable-table.html">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Medias</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/medias/image-gallery.html">Image Gallery</a>
                        </li>
                        <li>
                            <a href="pages/medias/carousel.html">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Charts</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/charts/morris.html">Morris</a>
                        </li>
                        <li>
                            <a href="pages/charts/flot.html">Flot</a>
                        </li>
                        <li>
                            <a href="pages/charts/chartjs.html">ChartJS</a>
                        </li>
                        <li>
                            <a href="pages/charts/sparkline.html">Sparkline</a>
                        </li>
                        <li>
                            <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/examples/profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="pages/examples/forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                            <a href="pages/examples/blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="pages/examples/404.html">404 - Not Found</a>
                        </li>
                        <li>
                            <a href="pages/examples/500.html">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">map</i>
                        <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/maps/google.html">Google Map</a>
                        </li>
                        <li>
                            <a href="pages/maps/yandex.html">YandexMap</a>
                        </li>
                        <li>
                            <a href="pages/maps/jvectormap.html">jVectorMap</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>
