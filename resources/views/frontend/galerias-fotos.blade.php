@extends('layouts.frontend')

{{--*/
$galeria_titulo = $galerias->titulo;
$galeria_url = route('home.fotos.galeria', [$galerias->id, $galerias->slug_url]);
$galeria_descripcion = $galerias->descripcion;
$galeria_imagen = '/upload/'.$galerias->imagen_carpeta.'850x500/'.$galerias->imagen;
/*--}}

@section('contenido_body')

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
				
		<div class="wrapper ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="col-1-1">
				
				<!-- Start Gallery Section -->
				<div class="clearfix">
				
					<h3>{{ $galeria_titulo }}</h3>
                    <p>{{ $galeria_descripcion }}</p>
					<!-- Start Isotope -->
					<div class="thumb-gallery super-list variable-sizes clearfix" id="thumb-gallery">

                        @foreach($fotos as $item)
                        {{--*/
                        $fotos_imagen = '/upload/'.$item->imagen_carpeta.$item->imagen;
                        /*--}}
						<div class="col-1-4 element">
							<div class="mosaic-block circle"><a href="{{ $fotos_imagen }}" class="mosaic-overlay fancybox" data-fancybox-group="gallery"></a>
							<div class="mosaic-backdrop"><img src="{{ $fotos_imagen }}" alt="Mock" /></div></div>
						</div>
                        @endforeach
							
					<!-- End Isotope -->		
					</div>

				</div>

			</div>
			
		</div>
	</div>
    	
@stop

@section('contenido_footer')
    {!! HTML::script('js/jquery.isotope.js') !!}
@stop