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
				
				<p class="lead">Hola, somos Orange Bike Perú un equipo de ciclismo inscrito en la Federación Deportiva Nacional de Ciclismo (FDNC), que se inició hace 4 años de la unión de personas amantes de este deporte y de la aventura sobre dos ruedas.</p>

                <p class="lead">Nuestra meta es llegar más lejos y elevar nuestro nivel deportivo para así estar a la altura de las grandes competencias.</p>
				
				<p><strong>Orange Bike Perú</strong></p>
				 					
			</div>
			
			<!-- Column -->
			<div class="col-1-2 last">
				<h3>Auspiciadores 2016</h3>

                <p><img src="/imagenes/auspicios.jpg" alt="Auspicios" /></p>

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