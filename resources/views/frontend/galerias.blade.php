@extends('layouts.frontend')

@section('contenido_body')

    <!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
				
		<div class="wrapper ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="col-1-1">
				
				@foreach($galeria as $item)
                {{--*/
                $galeria_titulo = $item->titulo;
                $galeria_url = route('home.fotos.galeria', [$item->id, $item->slug_url]);
                $galeria_descripcion = $item->descripcion;
                $galeria_imagen = '/upload/'.$item->imagen_carpeta.'850x500/'.$item->imagen;
                /*--}}
				<div class="gallery-section clearfix">
					<div class="col-1-4">
						<h3><a href="{{ $galeria_url }}">{{ $galeria_titulo }}</a></h3>
						<p>{{ $galeria_descripcion }}
						&#8230;<a href="{{ $galeria_url }}" class="read-more">Leer más</a></p>
					</div>				
					
					<div class="col-3-4 last">

                        <div class="mosaic-block circle">
                            <div class="mosaic-backdrop"><img src="{{ $galeria_imagen }}" alt="Mock" /></div>
                        </div>

					</div>
				</div>
                @endforeach

				<!-- Start Pagination -->
				<div class="clearfix">
                    {!! $galeria->appends(Request::all())->render() !!}
				</div> 

			</div>
			
		</div>
	</div>

@stop