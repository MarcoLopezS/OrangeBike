@extends('layouts.frontend')

{{--*/
$post_titulo = $noticia->titulo;
$post_imagen = '/upload/'.$noticia->imagen_carpeta.'800x500/'.$noticia->imagen;
$post_fecha = date_format(new DateTime($noticia->published_at), 'd F Y');
$post_descripcion = $noticia->descripcion;
$post_contenido = $noticia->contenido;
/*--}}

@section('title')
	{{ $post_titulo }} | @parent
@stop

@section('contenido_header')
@stop

@section('contenido_body')

<div class="container">

	<section class="col-lg-8">

		<article class="blog-nota">

			<div class="titulo-fecha">
				<time datetime="{{ $noticia->published_at }}">{{ $post_fecha }}</time>
				<h2>{{ $post_titulo }}</h2>
				<p>{{ $post_descripcion }}</p>
				<div class="social-media">
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5660b53de44c70e7" async="async"></script>
					<div class="addthis_native_toolbox"></div>
				</div>
			</div>

			<div class="imagen">
				<img src="{{ $post_imagen }}" alt="" width="100%">
			</div>

			<div class="contenido">
				{!! $post_contenido !!}
			</div>
			
		</article>

	</section>

	<section class="col-lg-4">
		
		@include('frontend.widgets.blog-categorias')

		@include('frontend.widgets.bicicentro')

		@include('frontend.widgets.galeria-videos')

		@include('frontend.widgets.galeria-fotos')

	</section>

</div>

@stop

@section('contenido_footer')
@stop