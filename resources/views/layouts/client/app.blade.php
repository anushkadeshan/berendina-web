<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="CREATE AN EMPOWERED, EQUITABLE SOCIETY WHERE POVERTY DOES NOT EXIST" />
    <meta name="keywords" content="non-profit,microfinance,micro finance,banking,charity,economic disaster" />
    <meta name="author" content="Berendina Development Services" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/manifest.json')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/photoswipe.css')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('images/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- Stylesheet -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/css-plugin-collections.css')}}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{URL::asset('css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{URL::asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{URL::asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{URL::asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{URL::asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="{{URL::asset('css/colors/theme-skin-orange.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/style-main-dark.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/css/jquery.orgchart.min.css" integrity="sha512-bCaZ8dJsDR+slK3QXmhjnPDREpFaClf3mihutFGH+RxkAcquLyd9iwewxWQuWuP5rumVRl7iGbSDuiTvjH1kLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- external javascripts -->
    <script src="{{URL::asset('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{URL::asset('js/jquery-plugin-collection.js')}}"></script>


    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{URL::asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/isotope.pkgd.js')}}"></script>
    <script src="{{URL::asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/photoswipe/photoswipe.js')}}"></script>
    <script src="{{URL::asset('assets/js/masonry-gallery.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            overflow-x: hidden;
        }
        .owl-carousel {
            -ms-touch-action: none;
            touch-action: none;
            }
    </style>
    @livewireStyles
    @stack('styles')
</head>

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader
        <div id="preloader">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>
        -->
        <livewire:client.home.header />
        @yield('content')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/js/jquery.orgchart.min.js" integrity="sha512-alnBKIRc2t6LkXj07dy2CLCByKoMYf2eQ5hLpDmjoqO44d3JF8LSM4PptrgvohTQT0LzKdRasI/wgLN0ONNgmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts
    @livewireChartsScripts
    @stack('scripts')
</body>

</html>
