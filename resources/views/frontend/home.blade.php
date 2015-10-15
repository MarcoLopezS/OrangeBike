@extends('layouts.frontend')

@section('contenido_header')
@stop

@section('contenido_body')

<div class="row">
	
	<div class="row">

		<div class="col-md-3">
		
			<h2>Noticias</h2>

		</div>

		<div class="col-md-9 pull-right">	
			
			<ul id="patrocinadores" class="pull-right">
				<li><a href="#" target="_blank">Patrocinador</a></li>
				<li><a href="#" target="_blank">Patrocinador</a></li>
				<li><a href="#" target="_blank">Patrocinador</a></li>
			</ul>

		</div>

	</div>

	<div class="row">
		
		<article class="noticia-item col-md-3">
			<div class="imagen">
				<img width="100%" src="upload/septiembre2015/300x200/imagen1.jpg" alt="">
			</div>
			<div class="datos">
				<div class="titulo">
					<h4>Aviva Tour of Britain, Stage 5: Teuns Finishes 10th</h4>
				</div>
				<div class="descripcion">
					<p>BMC Racing Team's Dylan Teuns finished 10th on Thursday's mountain-top finish to move into sixth overall at the Aviva Tour of Britain.</p>
				</div>
			</div>
		</article>
		<article class="noticia-item col-md-3">
			<div class="imagen">
				<img width="100%" src="upload/septiembre2015/300x200/imagen2.jpg" alt="">
			</div>
			<div class="datos">
				<div class="titulo">
					<h4>Aviva Tour of Britain, Stage 4: Gerts Ninth</h4>
				</div>
				<div class="descripcion">
					<p>Floris Gerts of the BMC Racing Team finished ninth Wednesday to remain third overall at the Aviva Tour of Britain after teammate Danilo Wyss…</p>
				</div>
			</div>
		</article>
		<article class="noticia-item col-md-3">
			<div class="imagen">
				<img width="100%" src="upload/septiembre2015/300x200/imagen3.jpg" alt="">
			</div>
			<div class="datos">
				<div class="titulo">
					<h4>Vuelta a España, Stage 17: Individual Time Trial</h4>
				</div>
				<div class="descripcion">
					<p>Wednesday's individual time trial at the Vuelta a España saw the overall lead change hands again while Joey Rosskopf was the BMC Racing Team's</p>
				</div>
			</div>
		</article>
		<article class="noticia-item col-md-3">
			<div class="imagen">
				<img width="100%" src="upload/septiembre2015/300x200/imagen4.jpg" alt="">
			</div>
			<div class="datos">
				<div class="titulo">
					<h4>Roster: Grands Prix Cyclistes</h4>
				</div>
				<div class="descripcion">
					<p>The BMC Racing Team has announced its rosters for the Grands Prix Cyclistes, a pair of WorldTour races in Canada.</p>
				</div>
			</div>
		</article>

	</div>

</div>

<div class="row">
		
	<div class="col-md-6">

		<div class="row">

			<div id="orange-social">
				<h3>#REDESSOCIALES</h3>
				<ul>
					<li>
						<a href="https://www.youtube.com/channel/UCj8DKvrLFXfCcTcbgDhL0KA" target="_blank">
							<i class="fa fa-youtube fa-5x"></i>
							<span>Youtube</span>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/orangebikeperu" target="_blank">
							<i class="fa fa-twitter fa-5x"></i>
							<span>Twitter</span>
						</a>
					</li>
					<li>
						<a href="http://www.facebook.com/OrangeBikePeru" target="_blank">
							<i class="fa fa-facebook-official fa-5x"></i>
							<span>Facebook</span>
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

	<div class="col-md-6">

		<div class="row">

			<div class="enter-shop">
				<h3>Bicicentro</h3>
				<a href="bicicentro"><img src="/imagenes/bicicentro-isotipo.jpg" width="200" alt="webshop"></a>
				<p class="slogan" style="padding:0 10px;">Reparación, venta de repuestos, accesorios de bicicletas y motos de marcas importadas. Al por mayor y menos.</p>
				<a class="enter-shop-link" href="bicicentro">Entrar en la tienda</a>
			</div>

		</div>
		
	</div>

</div>

@stop

@section('contenido_footer')
@stop