<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		@section('title')
			Orange Bike Perú
		@show
	</title>
	
	{{-- Bootstrap y FontAwesome--}}
	{!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
	{!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}

	{{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- Google Fonts --}}
	{!! HTML::style('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800') !!}
	{!! HTML::style('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700') !!}
	{!! HTML::style('https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700') !!}

	{{-- Revolution Slider --}}
	{!! HTML::style('assets/revslider/css/extralayers.css') !!}
	{!! HTML::style('assets/revslider/css/settings.css') !!}

    {{-- Estilos --}}
    {!! HTML::style('css/normalize.css') !!}
    {!! HTML::style('css/estilos.css') !!}

	@yield('contenido_header')

</head>
<body>
	
	<header>

		<div id="topbar">
			<span class="topbar-right hidden-xs"></span>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12 address wow fadeIn animated" data-wow-duratation="2s" style="visibility: visible; animation-name: fadeIn;">
	                	<p>
	                		<i class="fa fa-map-marker"></i> 
	                		 Av. Perú 3893 - Bicicentro Orange
	                	</p>
	                </div>
	                <div class="col-md-6 col-sm-4 col-xs-12 email-address wow fadeIn animated" data-wow-delay="0.3s" data-wow-duratation="2s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
		                <p>
		                	<i class="fa fa-envelope"></i>
							<a href="mailto:orangebikeperu@gmail.com">orangebikeperu@gmail.com</a>
		                </p>
	                </div>
	                <div class="col-md-3 col-sm-4 col-xs-12 pull-right social">
		                <p class="social-skew">
		                	<a target="_blank" href="https://www.facebook.com/OrangeBikePeru"><i class="fa fa-facebook"></i></a>
		                	<a target="_blank" href="http://twitter.com/orangebikeperu"><i class="fa fa-twitter"></i></a>
		                	<a target="_blank" href="https://www.youtube.com/channel/UCj8DKvrLFXfCcTcbgDhL0KA"><i class="fa fa-youtube"></i></a>
		                	<a target="_blank" href="http://instagram.com/orangebikeperu"><i class="fa fa-instagram"></i></a>
		                </p>
	                </div>
				</div>				
			</div>			
		</div>

		<div id="main-navigation">
		    <div id="navigation">
		        <nav class="navbar navbar-default" role="navigation">
		            <div class="container">
		                <div class="row">
		                    <!--  Brand and toggle get grouped for better mobile display -->
		                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12">
			                    <div class="navbar-header">
			                        <a class="navbar-brand wow bounceIn logo col-xs-8 animated" data-wow-duration="2s" data-wow-delay="1s" href="/" 
			                        style="visibility: visible; animation-duration: 2s; animation-delay: 1s; animation-name: bounceIn;">
			                            <img height="40" src="/imagenes/logo.jpg" alt="Orange Bike Perú" class="img-responsive"> 
			                        </a>
			                        <div class="col-xs-4">
				                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar">
				                        	<span class="sr-only">Menú</span>
				                        	<span class="icon-bar"></span>
				                        	<span class="icon-bar"></span>
				                        	<span class="icon-bar"></span>
				                        </button>
			                        </div>
			                    </div>
		                    </div>
		                    <!--  Collect the nav links, forms, and other content for toggling --> 
		                    <div class="col-lg-9 col-md-10 col-sm-9 col-xs-12">
			                    <div class="collapse navbar-collapse nav-collapse" id="fixed-collapse-navbar">
			                        <ul class="nav navbar-nav navbar-right cl-effect-1">
			                            <li {!! (Request::is('/') ? 'class="active"' : '') !!} ><a href="/">Inicio</a></li>
										<li {!! (Request::is('blog*') ? 'class="active"' : '') !!} ><a href="/blog">Blog</a></li>
										<li {!! (Request::is('fotos*') ? 'class="active"' : '') !!} ><a href="/fotos">Fotos</a></li>
										<li {!! (Request::is('videos*') ? 'class="active"' : '') !!} ><a href="/videos">Videos</a></li>
										<li {!! (Request::is('bicicentro*') ? 'class="active"' : '') !!} ><a href="/bicicentro">Bicicentro</a></li>
										<li {!! (Request::is('contacto*') ? 'class="active"' : '') !!} ><a href="/contacto">Contacto</a></li>
			                        </ul>
			                    </div>
		                    </div>
		                </div>
		            </div>
		        </nav>
		    </div>
		</div>

		@include('frontend.widgets.slider')
		
	</header>

	@yield('contenido_body')
	
	<footer>

		<div class="container">
			
			<div class="row">
				
				© Orange Bike Perú 2015

			</div>

		</div>
		
	</footer>

	{{-- jQuery y Bootstrap--}}
	{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
	{!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}

	@yield('contenido_footer')

</body>
</html>