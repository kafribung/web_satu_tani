<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link href="{{ asset('assets/images/logo/logo st.png') }}" rel="shortcut icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('dashboard_assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('dashboard_assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('dashboard_assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('dashboard_assets/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('dashboard_assets/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('dashboard_assets/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red">
    @include('layouts_dashboard._navbar')
    @include('layouts_dashboard._sidebar')

    <section class="content">
        {{ $slot }}
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('dashboard_assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('dashboard_assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('dashboard_assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('dashboard_assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('dashboard_assets/plugins/node-waves/waves.js') }}"></script>


    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('dashboard_assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('dashboard_assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('dashboard_assets/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('dashboard_assets/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('dashboard_assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('dashboard_assets/js/admin.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/pages/index.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('dashboard_assets/js/demo.js') }}"></script>

    @stack('jQuery_ajax')
</body>

</html>
