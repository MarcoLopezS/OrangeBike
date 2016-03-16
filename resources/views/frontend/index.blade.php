@extends('layouts.frontend')

@section('contenido_body')

	<!-- Revolution Slider -->
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
				
				<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000"  data-saveperformance="off">
					<!-- MAIN IMAGE -->
					<img src="img/media/Sprinkle.jpg"  alt="Title"  data-bgposition="left center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
			
					<!-- LAYER NR. 1 -->
					<div class="tp-caption tp-fade fadeout fullscreenvideo"
						data-x="0"
						data-y="0"
						data-speed="1000"
						data-start="1100"
						data-easing="Power4.easeOut"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1500"
						data-endeasing="Power4.easeIn"
						data-autoplay="true"
						data-autoplayonlyfirsttime="false"
						data-nextslideatend="false"
			 			data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" >
				
						<video controls style="width: 100%; height: 100%" poster="img/media/Sprinkle.jpg" loop>
						<source src="img/media/Sprinkle.webm"  type='video/webm;codecs="vp8, vorbis"' />
						<source src="img/media/Sprinkle.mp4"   type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
						<source src="img/media/Sprinkle.ogv" type='video/ogg; codecs="theora, vorbis"'>
						</video>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-heading"
						data-x="0" data-hoffset="0"
						data-y="215" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="500"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Our Blood, Our Sweat,<br/> 
						Your Tears <div>- CLUB MOTTO</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-text"
						data-x="0" data-hoffset="0"
						data-y="340" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="750"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Cum sociis natoque penatibus et magnis dis parturient montes,<br/> 
						nascetur ridiculus mus. Maecenas sed diam eget risus varius<br/>
						 blandit sit amet non magna... 
					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption fadeout sfr tp-resizeme"
						data-x="0" data-hoffset="0"
						data-y="460" data-voffset="0"
						data-speed="800"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						<a class="btn" href="pricing1.html">Join Our Club Today</a>&nbsp; <a class="btn-2" href="about.html">Read More</a>
					</div>	
				</li>
				

			</ul>
		</div>
	</div>
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">		
		<div class="wrapper ad-pad clearfix">
			
			<!-- Column -->
			<div class="col-1-2">
				<h3>Bienvenido a nuestro Club</h3>
				
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				
				<p>Morbi leo risus, porta ac conse ctetur ac, vestiosite Duis mollis, est non commodo luctus, nisi erat porttitor ligula est non commodo sed diam. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo.</p> 
				
				<p><strong>Orange Bike Perú</strong></p>
				 					
			</div>
			
			<!-- Column -->
			<div class="col-1-2 last">
				<h3>Auspiciadores 2016</h3>

			</div>

		</div>
	</div>
    
    <!-- Start Outter Wrapper -->
    <div class="outter-wrapper divider"></div>
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper centered feat-block-1">
		<div class="wrapper ad-pad clearfix">
		
			<!-- Start Carousel -->
			<div class="owl-carousel-container ">
    			<!-- Carousel Nav -->
    			<div class="customNavigation">
    			    <a class="prev"></a>
    			    <a class="next"></a>
    			</div>
			
    			<div id="carousel-single" class="owl-carousel carousel-single">

                    <!-- Carousel Item -->
                    <div class="item col-2-3 nofloat">
                        <blockquote>"Si en realidad amas el deporte, debes luchar por alcanzar tu sueño, algunas veces ganarás y otras veces perderás, pero al final, después de una dura lucha, podrás alcanzar el triunfo."</blockquote>
                    </div>

                    <!-- Carousel Item -->
                    <div class="item col-2-3 nofloat">
                        <blockquote>"No hay que tener ningun miedo a perder, de hecho he perdido muchas más carreras de las que he ganado." <cite>- Miguel Indurain</cite></blockquote>
                    </div>

                    <!-- Carousel Item -->
                    <div class="item col-2-3 nofloat">
                        <blockquote>"Las medallas se ganan en el entrenamiento y se recogen en la carrera."</blockquote>
                    </div>

	    		</div>
			</div>
			
		</div>
	</div>
	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper divider"></div>

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper">
		<div class="wrapper ad-pad clearfix">
			
			<h3>Noticias</h3>

            {{--*/ $i = 1; /*--}}
            @foreach($noticias as $item)
            {{--*/
            $post_titulo = $item->titulo;
            $post_url = route('home.blog.noticia', [$item->id, $item->slug_url]);
            $post_imagen = '/upload/'.$item->imagen_carpeta.'246x164/'.$item->imagen;
            $post_descripcion = $item->descripcion;
            /*--}}
			<div class="col-1-4 @if($i==4) last @endif">
			  	<div class="mosaic-block circle">
			  		<a href="{{ $post_url }}" class="mosaic-overlay fancybox link" title="{{ $post_titulo }}"></a>
                    <div class="mosaic-backdrop">
                        <img src="{{ $post_imagen }}" alt="{{ $post_titulo }}" />
                    </div>
			  	</div>
			  	
			  	<h6 class="title"><a href="{{ $post_url }}">{{ $post_titulo }}</a></h6>
			  	<p>{{ $post_descripcion }}&#8230;<a href="post.html" class="read-more">Más</a></p>
			</div>
            {{--*/ $i++; /*--}}
            @endforeach
						
		</div>
	</div>

@stop