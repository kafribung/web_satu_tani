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
                    <img src="{{ asset('assets/images/logo/logo st1.png') }}" alt="">
                </a>

            </div>
            <!--====== End - Main Logo ======-->

            <!--====== Search Form ======-->
            <div class="col-md-6 offset-md-1">
                <form class="" style="margin-bottom: 20px; padding-top: 10px;">
                    <div class="input-group input-group-lg mb-3" id="search-box" data-component-category>
                        <input type="text" class="form-control default-font-size" placeholder="Search product"
                            aria-label="Search product">
                        <select
                            class="custom-select input-group-append form-control-lg no-border-x default-font-size">
                            <option selected="">All categories</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn1 btn-primary" type="button">
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
                                <a href="bawang-eceran.html">BAWANG ECERAN</a>
                            </li>
                            <li>
                                <a href="bawang-koperasi.html">BAWANG KOPERASI</a>
                            </li>
                            <li>
                                <a href="article.html">ARTIKEL</a>
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

                                <a><i class="fas fa-cogs fa-lg"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:160px">
                                    <li>
                                        <a href="dashboard.html">
                                        <span>Dashboard</span></a>
                                    </li>

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

                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>

                            <li class="has-dropdown">
                                <a class="mini-cart-shop-link">
                                    <i class="fas fa-shopping-cart fa-lg"></i>
                                    <span class="total-item-round">2</span>
                                </a>
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                <div class="mini-cart">
                                    <!--====== Mini Product Container ======-->
                                    <div class="mini-product-container gl-scroll u-s-m-b-15">
                                        <!--====== Card for mini cart ======-->
                                        <div class="card-mini-product">
                                            <div class="mini-product">
                                                <div class="mini-product__image-wrapper">
                                                    <a class="mini-product__link"
                                                        href="bawang-eceran-detail.html">
                                                        <img class="u-img-fluid"
                                                            src="{{ asset('assets/images/product/electronic/product3.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="mini-product__info-wrapper">
                                                    <span class="mini-product__category">
                                                        <a href="bawang-eceran.html">Electronics</a>
                                                    </span>
                                                    <span class="mini-product__name">
                                                        <a href="bawang-eceran-detail.html">
                                                            Yellow Wireless
                                                            Headphone</a>
                                                    </span>
                                                    <span class="mini-product__quantity">1 x</span>
                                                    <span class="mini-product__price">Rp.8.000</span></div>
                                            </div>
                                            <a class="mini-product__delete-link far fa-trash-alt"></a>
                                        </div>
                                        <!--====== End - Card for mini cart ======-->
                                    </div>
                                    <!--====== End - Mini Product Container ======-->

                                    <!--====== Mini Product Statistics ======-->
                                    <div class="mini-product-stat">
                                        <div class="mini-total">
                                            <span class="subtotal-text">SUBTOTAL</span>
                                            <span class="subtotal-value">Rp.16.000</span></div>
                                        <div class="mini-action">
                                            <a class="mini-link btn--e-brand-b-2"
                                                href="checkout.html">CHECKOUT</a>
                                            <a class="mini-link btn--e-transparent-secondary-b-2"
                                                href="cart.html">LIHAT KERANJANG</a></div>
                                    </div>
                                    <!--====== End - Mini Product Statistics ======-->
                                </div>
                                <!--====== End - Dropdown ======-->
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
