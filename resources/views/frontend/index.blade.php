@extends('layouts.frontend')

@section('contenido_body')

    {{-- Slider --}}
    @if(Request::is('/'))
        {!! $slider->body !!}
    @endif
    	
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

@section('contenido_footer')

    @if(Request::is('/'))
        {!! $slider->header !!}
        {!! $slider->footer !!}
    @endif

@stop