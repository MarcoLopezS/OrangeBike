<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Orange Bike Perú</title>
	
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
		                    <div class="col-md-3 col-sm-3 col-xs-12">
			                    <div class="navbar-header">
			                        <a class="navbar-brand wow bounceIn logo col-xs-8 animated" data-wow-duration="2s" data-wow-delay="1s" href="index.html" style="visibility: visible; animation-duration: 2s; animation-delay: 1s; animation-name: bounceIn;">
			                            <img height="40" src="imagenes/logo.jpg" alt="Orange Bike Perú" class="img-responsive"> 
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
		                    <div class="col-md-9 col-sm-9 col-xs-12">
			                    <div class="collapse navbar-collapse nav-collapse" id="fixed-collapse-navbar">
			                        <ul class="nav navbar-nav navbar-right cl-effect-1">
			                            <li class="active"><a href="#main-slider" class="scroll">Inicio</a> </li>
			                            <li><a href="#about" class="scroll">Integrantes</a> </li>
			                            <li><a href="#trails" class="scroll">Noticias</a> </li>
			                            <li><a href="#trails" class="scroll">Fotos</a> </li>
			                            <li><a href="#trails" class="scroll">Videos</a> </li>
			                            <li><a href="#blogs" class="scroll">Bicicentro</a></li>                            
			                            <li><a href="#contact" class="scroll">Contacto</a></li>
			                        </ul>
			                    </div>
		                    </div>
		                </div>
		            </div>
		        </nav>
		    </div>
		</div>

		<div class="tp-banner-container">
			<div class="tp-banner" >
				<ul>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Slide">
						<img src="imagenes/peloton.jpg"  alt="slidebg1" data-lazyload="imagenes/peloton.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					</li>

					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Slide">
						<img src="imagenes/llegada.jpg"  alt="slidebg1" data-lazyload="imagenes/llegada.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					</li>

					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Slide">
						<img src="imagenes/sprinter.jpg"  alt="slidebg1" data-lazyload="imagenes/sprinter.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					</li>

				</ul>

				<div class="tp-bannertimer"></div>

			</div>

		</div>
		
	</header>

	<section>

		<div class="container">

			@yield('contenido_body')

		</div>

	</section>
	
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

	{{-- Revolution Slider --}}
	{!! HTML::script('assets/revslider/js/jquery.themepunch.tools.min.js') !!}
	{!! HTML::script('assets/revslider/js/jquery.themepunch.revolution.min.js') !!}
	<script>
		jQuery(document).ready(function(){
			jQuery('.tp-banner').show().revolution({
				dottedOverlay:"none",
				delay:16000,
				startwidth:1170,
				startheight:500,
				hideThumbs:200,
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				navigationType:"bullet",
				navigationArrows:"solo",
				navigationStyle:"round",
				touchenabled:"on",
				onHoverStop:"on",
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
				parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
				keyboardNavigation:"off",
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,
				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,
				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,
				shadow:0,
				fullWidth:"on",
				fullScreen:"off",
				spinner:"spinner4",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				forceFullWidth:"off",
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				videoJsPath:"rs-plugin/videojs/",
				fullScreenOffsetContainer: ""
			});
		});
	</script>

	@yield('contenido_footer')

</body>
</html>