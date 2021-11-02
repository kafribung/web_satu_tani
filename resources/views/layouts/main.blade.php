<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/.png" rel="shortcut icon">
    <title>Home - Satu Tani</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">

    <!--====== App ======-->
    @stack('css_app')
    {{ $cssTambahan }}
    <link rel="stylesheet" href="{{ asset('assets/css/app-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

</head>

<body class="config">
    <!--====== Preloader ======-->
    <div class="preloader is-active">
        <div class="preloader__wrap">
            <img class="preloader__img" src="{{ asset('assets/images/preloader.png') }}" alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        @include('layouts._navbar')

        <!--====== App Content ======-->
        <div class="app-content">
            {{ $slot }}

            @include('layouts._footer')
        </div>
        <!--====== End - Main App ======-->

        <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
        <script>
            window.ga = function () {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

        <!--====== Vendor Js ======-->
        <script src="{{ asset('assets/js/vendor.js') }}"></script>

        <!--====== jQuery Shopnav plugin ======-->
        <script src="{{ asset('assets/js/jquery.shopnav.js') }}"></script>

        <!--====== App ======-->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <!--====== Noscript ======-->
        <noscript>
            <div class="app-setting">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="app-setting__wrap">
                                <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                                <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                    JavaScript-capable browser.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </noscript>

    @stack('script')
</body>

</html>
