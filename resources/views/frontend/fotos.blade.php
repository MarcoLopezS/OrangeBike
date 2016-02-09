@extends('layouts.frontend')

@section('contenido_header')
@stop

@section('contenido_body')

<div id="galeria-fotos" class="container">

	<section class="col-lg-8">

		<h3 class="titulo-multimedia">Últimas Fotos</h3>

		<div class="row">

			<article class="blog-nota-item destacada col-lg-12">
				<a href="/blog-nota">

					<div class="imagen">
						<img src="http://lorempixel.com/800/400/sports/" alt="" width="100%">
					</div>

					<div class="titulo-fecha">
						<h2>1ra Competencia de Ciclismo</h2>
					</div>

				</a>
				
			</article>

			<article class="blog-nota-item col-lg-6 nth-child-odd">

				<a href="/blog-nota">

					<div class="imagen">
						<img src="http://lorempixel.com/400/200/sports/" alt="" width="100%">
					</div>

					<div class="titulo-fecha">
						<h2>Sagan Day: Celebrating the World Champion at Sportful</h2>
					</div>

				</a>
				
			</article>

			<article class="blog-nota-item col-lg-6">

				<a href="/blog-nota">
				
					<div class="imagen">
						<img src="http://lorempixel.com/400/200/sports/" alt="" width="100%">
					</div>
					
					<div class="titulo-fecha">
						<h2>1ra Competencia de Ciclismo</h2>
					</div>

				</a>
				
			</article>

			<article class="blog-nota-item col-lg-6 nth-child-odd">

				<a href="/blog-nota">

					<div class="imagen">
						<img src="http://lorempixel.com/400/200/sports/" alt="" width="100%">
					</div>

					<div class="titulo-fecha">
						<h2>Sagan Day: Celebrating the World Champion at Sportful</h2>
					</div>

				</a>
				
			</article>

			<article class="blog-nota-item col-lg-6">

				<a href="/blog-nota">
				
					<div class="imagen">
						<img src="http://lorempixel.com/400/200/sports/" alt="" width="100%">
					</div>
					
					<div class="titulo-fecha">
						<h2>1ra Competencia de Ciclismo</h2>
					</div>

				</a>
				
			</article>

			<article class="blog-nota-item col-lg-6 nth-child-odd">

				<a href="/blog-nota">

					<div class="imagen">
						<img src="http://lorempixel.com/400/200/sports/" alt="" width="100%">
					</div>

					<div class="titulo-fecha">
						<h2>Sagan Day: Celebrating the World Champion at Sportful</h2>
					</div>

				</a>
				
			</article>

			<article class="blog-nota-item col-lg-6">

				<a href="/blog-nota">
				
					<div class="imagen">
						<img src="http://lorempixel.com/400/200/sports/" alt="" width="100%">
					</div>
					
					<div class="titulo-fecha">
						<h2>1ra Competencia de Ciclismo</h2>
					</div>

				</a>
				
			</article>

		</div>

		<h3 class="titulo-multimedia">Más Fotos</h3>

		<div class="row more">

			<article class="blog-nota-item col-lg-6 nth-child-odd">

				<div class="titulo-fecha">
					<h2><a href="/blog-nota">Sagan Day: Celebrating the World Champion at Sportful</a></h2>
					<time datetime="2015-11-22 08:00">22 de Noviembre 2015</time>
				</div>
				
			</article>

			<article class="blog-nota-item col-lg-6">
				
				<div class="titulo-fecha">
					<h2><a href="/blog-nota">1ra Competencia de Ciclismo</a></h2>
					<time datetime="2015-11-22 08:00">22 de Noviembre 2015</time>
				</div>
				
			</article>

			<article class="blog-nota-item col-lg-6 nth-child-odd">

				<div class="titulo-fecha">
					<h2><a href="/blog-nota">Sagan Day: Celebrating the World Champion at Sportful</a></h2>
					<time datetime="2015-11-22 08:00">22 de Noviembre 2015</time>
				</div>
				
			</article>

			<article class="blog-nota-item col-lg-6">

				<div class="titulo-fecha">
					<h2><a href="/blog-nota">1ra Competencia de Ciclismo</a></h2>
					<time datetime="2015-11-22 08:00">22 de Noviembre 2015</time>
				</div>
				
			</article>

			<article class="blog-nota-item col-lg-6 nth-child-odd">

				<div class="titulo-fecha">
					<h2><a href="/blog-nota">Sagan Day: Celebrating the World Champion at Sportful</a></h2>
					<time datetime="2015-11-22 08:00">22 de Noviembre 2015</time>
				</div>
				
			</article>

			<article class="blog-nota-item col-lg-6">

				<div class="titulo-fecha">
					<h2><a href="/blog-nota">Sagan Day: Celebrating the World Champion at Sportful</a></h2>
					<time datetime="2015-11-22 08:00">22 de Noviembre 2015</time>
				</div>
				
			</article>

		</div>

	</section>

	<section class="col-lg-4">
		
		<aside>
			
			<h3>Categorias</h3>

			<ul>
				<li><a href="#">Competencias</a></li>
				<li><a href="#">Noticias</a></li>
				<li><a href="#">Eventos</a></li>
			</ul>

		</aside>

		<aside>
			
			<div class="enter-shop interior-enter-shop">
				<a href="bicicentro"><img src="/imagenes/logo-bicicentro.png" alt="webshop"></a>
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