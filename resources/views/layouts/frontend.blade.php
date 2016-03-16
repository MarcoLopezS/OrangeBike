<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">

    <!-- Page title + Description -->
    <title>Orange Bike Perú</title>
    <meta name="description" content="Sport is the best theme for sports clubs and centres">

    <!-- Style Sheets -->
    {!! HTML::style('css/normalize.min.css') !!}
    {!! HTML::style('css/styles.css') !!}

    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') !!}
    {!! HTML::style('css/jquery.sidr.light.css') !!}
    {!! HTML::style('js/media/mediaelementplayer.min.css') !!}
    {!! HTML::style('js/owl-carousel/owl.carousel.css') !!}
    {!! HTML::style('js/fancybox/jquery.fancybox.css?v=2.1.4') !!}
    {!! HTML::style('css/mosaic.css') !!}
    {!! HTML::style('css/responsive.css') !!}
    {!! HTML::style('css/tooltipster.css') !!}
    {!! HTML::style('css/mega.css') !!}

    {!! HTML::style('css/skin1.css') !!}
    {!! HTML::style('css/full.css') !!}

    <!-- Scripts -->
    {!! HTML::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') !!}

    @yield('contenido_header')

</head>
<body>

    <!-- Pre Header Area -->
    <div class="outter-wrapper pre-header-area header-style-1">
        <div class="wrapper clearfix">

            <div class="pre-header-left left">
                Orange Bike Perú - Adictos al Cycling
            </div>

            <div class="pre-header-right right">
                <ul class="right social-links boxy">
                    <li><a class="fa" title="Facebook" href="#">&#xf09a;</a></li>
                    <li><a class="fa" title="Youtube" href="#">&#xf16a;</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Header Area -->
    <div class="outter-wrapper header-area header-style-1">
        <div class="wrapper clearfix logo-container">
            <header>
                <div class="clearfix">

                    <div class="main-header-left left adjust-left">
                        <!-- Start Logo -->
                        <a class="logo" href="/">
                            <img src="/imagenes/logo.png" alt="Sport" />
                        </a>
                    </div>


                    <div class="main-header-right right adjust-right">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <style type="text/css">
                            .adslot_header{ width: 728px; height: 90px; margin: 10px auto; }
                        </style>
                        <!-- Orange Bike -->
                        <ins class="adsbygoogle adslot_header"
                             style="display:block"
                             data-ad-client="ca-pub-3674889010429322"
                             data-ad-slot="6956526345"
                             data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>

                </div>
            </header>
        </div>
    </div>

    <!-- Post Header Area -->
    <div class="outter-wrapper nav-container post-header-area header-style-1">

        <!-- Start Mobile Menu Icon -->
        <div id="mobile-header" class="">
            <a id="responsive-menu-button" href="#sidr-main">
                <em class="fa fa-bars"></em> Menu
            </a>
        </div>


        <div id="navigation" class="clearfix wrapper">
            <nav class="nav megamenu_container">
                <ul id="nav" class="right megamenu">
                    <li class="nav-parent"><a href="/">Inicio</a></li>
                    <li class="nav-parent"><a href="#">Integrantes</a></li>
                    <li class="nav-parent"><a href="#">Galería de Fotos</a></li>
                    <li class="nav-parent"><a href="/blog">Blog</a></li>
                    <li class="nav-parent"><a href="/contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>

    </div>

    @yield('contenido_body')

    <!-- Start Outter Wrapper -->
    <div class="outter-wrapper footer-wrapper">
        <div class="wrapper clearfix">
            <!-- Start Widget -->
            <div class="col-1-3 widget last">
                <a class="logo" href="/">
                    <img src="/imagenes/logo-letra.png" alt="Sport" />
                </a>
                <ul class="list-1">
                    <li><strong>Dirección:</strong> Av. Perú 3893 - SMP</li>
                    <li><strong><a href="contact.html">Ver Mapa</a></strong></li>
                </ul>
            </div>

            <div class="col-1-3 widget"></div>

            <!-- Start Widget -->
            <div class="col-1-3 widget">
                <h3 class="widget-title">Contactanos</h3>
                <ul class="list-1">
                    <li><strong>Teléfono:</strong> 573-5415</li>
                    <li><strong>Celular:</strong> 955-051-298</li>
                    <li><a href="#">orangebikeperu@gmail.com</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Start Outter Wrapper -->
    <div class="outter-wrapper base-wrapper">
        <div class="wrapper clearfix">
            <div class="left">© Copyright 2016</div>

            <!-- Social Icons -->
            <ul class="social-links right">
                <li><a class="fa" title="Facebook" href="#">&#xf09a;</a></li>
                <li><a class="fa" title="Youtube" href="#">&#xf16a;</a></li>
            </ul>
        </div>
    </div>

    <!-- Load jQuery -->
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') !!}
    {!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js') !!}

    <!-- Start Scripts -->
    {!! HTML::script('js/jquery.sidr.js') !!}
    {!! HTML::script('js/fancybox/jquery.fancybox.js?v=2.1.4') !!}
    {!! HTML::script('js/cleantabs.jquery.js') !!}
    {!! HTML::script('js/fitvids.min.js') !!}
    {!! HTML::script('js/jquery.scrollUp.min.js') !!}
    {!! HTML::script('js/owl-carousel/owl.carousel.js') !!}
    {!! HTML::script('js/selectivizr-min.js') !!}
    {!! HTML::script('js/placeholder.js') !!}
    {!! HTML::script('js/jquery.stellar.min.js') !!}
    {!! HTML::script('js/mosaic.1.0.1.js') !!}
    {!! HTML::script('js/toggle.js') !!}
    {!! HTML::script('js/jquery.tooltipster.js') !!}
    {!! HTML::script('js/jquery.countdown.js') !!}
    {!! HTML::script('js/jquery.sticky.js') !!}

    {!! HTML::script('js/main.js') !!}

    @yield('contenido_footer')

</body>
</html>