<!--====== Main Header ======-->
<header class="header--style-1">

    <!--====== Nav 1 ======-->
    <nav class="primary-nav primary-nav-wrapper--border"
        style="background-color: rgb(9, 151, 68); margin-bottom: 30px;">
        <div class="container"> </div>
    </nav>
    <!--====== End - Nav 1 ======-->

    <!--====== Main Logo ======-->
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="main-logo" style="padding-bottom: 0px;" href="/">
                    <img src="{{ asset('assets/images/logo/logo st.png') }}" alt="">
                </a>

            </div>
            <!--====== End - Main Logo ======-->

            <!--====== Search Form ======-->
            <div class="col-md-6 offset-md-1">
                <form action="{{ route('home.index') }}" method="GET" style="margin-bottom: 20px; padding-top: 10px;">
                    <div class="input-group input-group-lg mb-3" id="search-box" data-component-category>
                        <input name="search" type="text" class="form-control default-font-size" placeholder="Cari bawang" aria-label="Search product">
                        <select name="category"
                            class="custom-select input-group-append form-control-lg no-border-x default-font-size">
                            <option selected value="1">Bawang Eceran</option>
                            <option value="2">Bawang Koperasi</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn1 btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-md-3">
                <div class="logres" style="padding-top: 10px">
                    @guest
                    <a class="mini-link1 btn--e-brand-b-4" href="{{ route('register') }}">REGISTER</a>
                    <a class="mini-link1 btn--e-brand-b-3" href="{{ route('login') }}">LOGIN</a>
                    @else
                    <p class="mini-link1 btn--e-brand-b-4">Hi, {{ auth()->user()->name }}</p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Search Form ======-->

    <!--====== Nav 2 ======-->
    <nav class="secondary-nav-wrapper">
        <div class="container">

            <!--====== Secondary Nav ======-->
            <div class="secondary-nav">

                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation2">

                    <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-bars fa-2x"
                        type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">
                        <span class="ah-close">✕ Close</span>
                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                            <li>
                                <a class="{{ request()->routeIs('bawang-eceran.index') || request()->is('bawang-eceran/*') ? 'active' : '' }}" href="{{ route('bawang-eceran.index') }}">BAWANG ECERAN</a>
                            </li>
                            <li>
                                <a href="bawang-koperasi.html">BAWANG KOPERASI</a>
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation3">

                    <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop" type="button"></button>
                    <span class="total-item-round">2</span>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>
                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li>
                                <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                    title="Account">
                                    <a>
                                        <i class="fas fa-cogs fa-lg"></i>
                                        @auth
                                            @if (auth()->user()->checkouts()->where('status', 'menunggu pembayaran')->count() > 0)
                                                <span class="total-item-round">{{ auth()->user()->checkouts()->where('status', 'menunggu pembayaran')->count() }}</span>
                                            @endif
                                        @endauth

                                    </a>
                                    <!--====== Dropdown ======-->
                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:160px">
                                        @auth
                                            @if (auth()->user()->hasAdmin())
                                            <li>
                                                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                                            </li>
                                            @else
                                            <li>
                                                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                                            </li>
                                            @endif
                                        @endauth


                                        <li>
                                            <a href="{{ route('syarat-dan-ketentuan') }}" class="{{ request()->routeIs('syarat-dan-ketentuan') ? 'active' : '' }} ">
                                            <span>Syarat & Ketentuan </span></a>
                                        </li>

                                        <li>
                                            <a href="{{ route('kebijakan-privasi') }}" class="{{ request()->routeIs('kebijakan-privasi') ? 'active' : '' }} ">Kebijakan Privasi</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('tanya-jawab') }}" class="{{ request()->routeIs('tanya-jawab') ? 'active' : '' }} ">Tanya Jawab</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('panduan') }}" class="{{ request()->routeIs('panduan') ? 'active' : '' }} ">Panduan</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('tentang-kami') }}" class="{{ request()->routeIs('tentang-kami') ? 'active' : '' }} ">Tentang Kami</a>
                                        </li>

                                        @auth
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        @endauth

                                    </ul>
                                    <!--====== End - Dropdown ======-->
                                </li>
                                @auth
                                <li class="has-dropdown">
                                    <a class="mini-cart-shop-link">
                                        <i class="fas fa-shopping-cart fa-lg"></i>
                                        <span class="total-item-round">{{ auth()->user()->carts()->count() }}</span>
                                    </a>
                                    <!--====== Dropdown ======-->
                                    <span class="js-menu-toggle"></span>
                                    <div class="mini-cart">
                                        <!--====== Mini Product Container ======-->
                                        <div class="mini-product-container gl-scroll u-s-m-b-15">
                                            <!--====== Card for mini cart ======-->
                                            @forelse (auth()->user()->carts()->latest()->get() as $index => $cart)
                                            <div class="card-mini-product">
                                                <div class="mini-product">
                                                    <div class="mini-product__image-wrapper">
                                                        <a class="mini-product__link"
                                                            href="{{ route('bawang-eceran.show', $cart->product) }}">
                                                            <img class="u-img-fluid" src="{{ $cart->product->take_img($cart->product->img_1) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="mini-product__info-wrapper">
                                                        <span class="mini-product__category">
                                                            <a href="{{ route('bawang-eceran.index') }}">{{ $cart->product->product_group->name == 'Eceran'  ? 'Eceran' : 'Koperasi'}}</a>
                                                        </span>
                                                        <span class="mini-product__name">
                                                            <a href="{{ route('bawang-eceran.show', $cart->product) }}"> {{ $cart->product->name }}</a>
                                                        </span>
                                                        <span class="mini-product__quantity">Jumlah {{ $cart->stock  }}</span>
                                                        <span class="mini-product__price">Rp.{{ number_format($cart->price) }}</span>
                                                    </div>

                                                </div>
                                                <a href="{{ route('keranjang.delete', $cart) }}" class="mini-product__delete-link far fa-trash-alt" onclick="event.preventDefault(); document.getElementById('delete_cart{{ $index }}').submit();"></a>
                                                <form id="delete_cart{{ $index }}" action="{{ route('keranjang.delete', $cart) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </div>
                                            @empty
                                            <div class="card-mini-product">
                                                <div class="mini-product">
                                                    <div class="mini-product__info-wrapper">
                                                        <span class="mini-product__category">
                                                            <p>Belum ada produk yang ditambhakan</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforelse
                                            <!--====== End - Card for mini cart ======-->
                                        </div>
                                        <!--====== End - Mini Product Container ======-->

                                        <!--====== Mini Product Statistics ======-->
                                        <div class="mini-product-stat">
                                            <div class="mini-total">
                                                <span class="subtotal-text">Total Harga</span>
                                                <span class="subtotal-value">Rp.{{ number_format(auth()->user()->carts()->sum('price')) }}</span>
                                            </div>

                                            <div class="mini-action">
                                                @if (auth()->user()->checkouts()->where('status', 'menunggu konfirmasi')->count() > 0)
                                                <a class="mini-link btn--e-brand-b-2" href="{{ route('konfirmasi.index') }}">Selesaikan Pesanan</a>
                                                @else
                                                    @if (auth()->user()->carts()->count() != 0)
                                                    <a class="mini-link btn--e-brand-b-2" href="{{ route('pembayaran.index') }}">Pembayaran</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                        <!--====== End - Mini Product Statistics ======-->
                                    </div>
                                    <!--====== End - Dropdown ======-->
                                </li>
                                @endauth
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Secondary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 2 ======-->
</header>
<!--====== End - Main Header ======-->
