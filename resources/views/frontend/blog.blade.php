@extends('layouts.frontend')

@section('title')
	Blog | @parent
@stop

@section('contenido_header')
@stop

@section('contenido_body')

<div class="container">

	<section class="col-lg-8">

		@foreach($noticias as $item)
		{{--*/
		$noticia_titulo = $item->titulo;
		$noticia_url = route('home.blog.noticia', [$item->id, $item->slug_url]);
		$noticia_fecha = date_format(new DateTime($item->published_at), 'd F Y');
		$noticia_imagen = '/upload/'.$item->imagen_carpeta.'800x500/'.$item->imagen;
		$noticia_descripcion = $item->descripcion;
		/*--}}

		<article class="blog-nota-item">

			<div class="titulo-fecha col-lg-12">
				<h2><a href="{{ $noticia_url }}">{{ $noticia_titulo }}</a></h2>
				<time datetime="{{ $item->published_at }}">{{ $noticia_fecha }}</time>
			</div>

			<div class="imagen col-lg-4">
				<img src="{{ $noticia_imagen }}" alt="" width="100%">
			</div>

			<div class="contenido col-lg-8">
				<p>{{ $noticia_descripcion }}</p>
				<a class="leer-nota" href="{{ $noticia_url }}">Leer nota</a>
			</div>
			
		</article>

		@endforeach

		<nav>
			{!! $noticias->appends(Request::all())->render() !!}
		</nav>

	</section>

	<section class="col-lg-4">
		
		<aside>

			<div class="categories-list">
			
				<h3>Categorias</h3>

				<ul>
					<li><a href="#">Competencias</a></li>
					<li><a href="#">Noticias</a></li>
					<li><a href="#">Eventos</a></li>
				</ul>

			</div>

		</aside>

		<aside>
			
			<div class="enter-shop interior-enter-shop">
				<a href="bicicentro"><img src="/imagenes/logo-bicicentro.jpg" alt="webshop"></a>
				<a class="enter-shop-link" href="bicicentro">Entrar en la tienda</a>
			</div>

		</aside>

		<aside>

			<h3>Videos</h3>

			<div id="interior-video">

				<div class="video">
					<iframe width="100%" height="200" src="https://www.youtube.com/embed/6aQJ9fzNn4o" frameborder="0" allowfullscreen></iframe>					
				</div>
				
				<div class="datos">
					<h3>Matucana</h3>
				</div>

			</div>

		</aside>

		<aside>

			<h3>Fotos</h3>
			
			<div id="interior-fotos">

				<div class="fotos">
					
					<ul>
						<li class="col-lg-4"><a href="#"><img width="100%" src="http://placehold.it/150x135" alt=""></a></li>
						<li class="col-lg-4"><a href="#"><img width="100%" src="http://placehold.it/150x135" alt=""></a></li>
						<li class="col-lg-4"><a href="#"><img width="100%" src="http://placehold.it/150x135" alt=""></a></li>
						<li class="col-lg-4"><a href="#"><img width="100%" src="http://placehold.it/150x135" alt=""></a></li>
						<li class="col-lg-4"><a href="#"><img width="100%" src="http://placehold.it/150x135" alt=""></a></li>
						<li class="col-lg-4"><a href="#"><img width="100%" src="http://placehold.it/150x135" alt=""></a></li>
					</ul>

				</div>

				<div class="datos">
					<h3>Salida a Callahuanca</h3>
				</div>
				
			</div>

		</aside>

	</section>

</div>

@stop

@section('contenido_footer')

@stop