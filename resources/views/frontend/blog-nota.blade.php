@extends('layouts.frontend')

{{--*/
$post_titulo = $noticia->titulo;
$post_url = route('home.blog.noticia', [$noticia->id, $noticia->slug_url]);
$post_imagen = '/upload/'.$noticia->imagen_carpeta.'800x500/'.$noticia->imagen;
$post_fecha = $noticia->fechaTexto($noticia->created_at);
$post_descripcion = $noticia->descripcion;
$post_contenido = $noticia->contenido;
/*--}}

@section('contenido_header')
<!-- Open Graph -->
<meta property="og:title" content='{{ $post_titulo  }}'>
<meta property="og:type" content='article' >
<meta property="og:url" content='{{ $post_url }}' >
<meta property="og:image" content='http://orangebikeperu.com{{ $post_imagen }}' >
<meta property="og:site_name" content='Orange Bike Perú' >
<meta property="fb:admins" content='620599104769893'>
<meta property="og:description" content='{{ $post_descripcion }}'>
@stop

@section('contenido_body')

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">		
		<div class="wrapper blog-roll ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="col-3-4">
			
				<div class="clearfix post">

					<h1 class="title">{{ $post_titulo }}</h1>
					
					<div class="mosaic-block circle">
						<img src="{{ $post_imagen }}" alt="{{ $post_titulo }}" />
					</div>
					<h6 class="meta"><a class="date" href="#">{{ $post_fecha }}</a></h6>

					<p class="lead">{{ $post_descripcion }}</p>

                    {!! $post_contenido !!}

				</div>

			</div>

			<!-- Start Right Sidebar  -->
			<aside class="col-1-4 right last">

				<div class="widget">
				    <h3 class="widget-title">Noticias</h3>
				    <ul class="list-1 widget-list">
                        @foreach($ultimas as $item)
                        {{--*/
                        $nota_titulo = $item->titulo;
                        $nota_url = route('home.blog.noticia', [$item->id, $item->slug_url]);
                        /*--}}
				    	<li><a href="{{ $nota_url }}">{{ $nota_titulo }}</a></li>
                        @endforeach
				    </ul>
			    </div>

			</aside>
			
		</div>
	</div>

@stop