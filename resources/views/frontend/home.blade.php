@extends('layouts.frontend')

@section('contenido_header')
@stop

@section('contenido_body')

<section>

	<div class="container">

		<div class="row">
			
			<div class="row">

				<div class="col-lg-12">
				
					<h2>Noticias</h2>

				</div>

			</div>

			<div class="row">
				
				@foreach($noticias as $item)
				{{--*/
				$post_titulo = $item->titulo;
				$post_url = route('home.blog.noticia', [$item->id, $item->slug_url]);
				$post_imagen = '/upload/'.$item->imagen_carpeta.'300x200/'.$item->imagen;
				$post_descripcion = $item->descripcion;
				/*--}}
				<article class="noticia-item col-md-3">
					<div class="imagen">
						<img width="100%" src="{{ $post_imagen }}" alt="">
					</div>
					<div class="datos">
						<div class="titulo">
							<h4><a href="{{ $post_url }}">{{ $post_titulo }}</a></h4>
						</div>
						<div class="descripcion">
							<p>{{ $post_descripcion }}</p>
						</div>
					</div>
				</article>
				@endforeach

				<article class="publicdad-noticia-item col-md-3">
					<style type="text/css">
		                .adslot_nota { width:250px; height: 250px; margin: 0 auto; }
		                @media (min-width:500px) { .adslot_home { width: 320px; height: 100px;  margin: 0 auto; } }
		                @media (min-width:800px) { .adslot_home { width: 970px; height: 250px; margin: 0 auto; } }
				    </style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle adslot_nota"
					     style="display:block;"
					     data-ad-client="ca-pub-3674889010429322"
					     data-ad-slot="6956526345"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</article>

			</div>

		</div>

		<div class="row">

			<div class="col-md-6">

				<div class="row">

					<div class="enter-shop">
						<a href="bicicentro"><img src="/imagenes/logo-bicicentro.jpg" alt="webshop"></a>
						<a class="enter-shop-link" href="bicicentro">Entrar en la tienda</a>
					</div>

				</div>
				
			</div>
				
			<div class="col-md-6">

				<div class="row">

					<div id="orange-social">
						<h3>#REDESSOCIALES</h3>
						<ul>
							<li>
								<a href="http://www.facebook.com/OrangeBikePeru" target="_blank">
									<i class="fa fa-facebook-official fa-5x"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a href="http://twitter.com/orangebikeperu" target="_blank">
									<i class="fa fa-twitter fa-5x"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCj8DKvrLFXfCcTcbgDhL0KA" target="_blank">
									<i class="fa fa-youtube fa-5x"></i>
									<span>Youtube</span>
								</a>
							</li>
							<li>
								<a href="http://instagram.com/orangebikeperu" target="_blank">
									<i class="fa fa-instagram fa-5x"></i>
									<span>Instagram</span>
								</a>
							</li>
						</ul>
					</div>

				</div>
				
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-12">
				
				<div class="publicidad-centro">
					
					<style type="text/css">
		                .adslot_home { width:250px; height: 250px; margin: 0 auto; }
		                @media (min-width:480px) { .adslot_home { width: 468px; height: 60px;  margin: 0 auto; } }
		                @media (min-width:769px) { .adslot_home { width: 728px; height: 90px; margin: 0 auto; } }
		                @media (min-width:1025px) { .adslot_home { width: 970px; height: 250px; margin: 0 auto; } }
				    </style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle adslot_home"
					     style="display:block"
					     data-ad-client="ca-pub-3674889010429322"
					     data-ad-slot="6956526345"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>

				</div>

			</div>

		</div>

	</div>

</section>

<section class="galeria-home">

	<div class="container">

		<div class="row">
		
			<h2>Fotos y Videos</h2>

			<div id="home-video" class="col-lg-6">

				<div class="video">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/6aQJ9fzNn4o" frameborder="0" allowfullscreen></iframe>					
				</div>
				
				<div class="datos">
					<h3>Matucana</h3>
				</div>

			</div>

			<div id="home-fotos" class="col-lg-6">



				<div class="fotos">
					
					<ul>
						@foreach($fotos as $item)
						{{--*/
						$fotos_imagen = '/upload/'.$item->imagen_carpeta.'150x135/'.$item->imagen;
						/*--}}
						<li><a href="#"><img src="{{ $fotos_imagen }}" alt=""></a></li>
						@endforeach						
					</ul>

				</div>

				<div class="datos">
					<h3>{{ $galeria->titulo }}</h3>
				</div>
				
			</div>

		</div> 

	</div>

</section>

@stop

@section('contenido_footer')

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

@stop