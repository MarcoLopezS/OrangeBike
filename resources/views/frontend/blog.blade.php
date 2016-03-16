@extends('layouts.frontend')

@section('contenido_body')

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">		
		<div class="wrapper ad-pad blog-roll clearfix">
		
			<!-- Start Main Column  -->
			<div class="col-1-1">
			
		 	    <div class="timeline-container">
		 	    	<ul class="timeline clearfix">


		 	    		@foreach($noticias as $item)
                        {{--*/
                        $post_titulo = $item->titulo;
                        $post_url = route('home.blog.noticia', [$item->id, $item->slug_url]);
                        $post_imagen = '/upload/'.$item->imagen_carpeta.'526x351/'.$item->imagen;
                        $post_descripcion = $item->descripcion;
                        /*--}}
		 	    		<li>
		 	    			<div class="post-excerpt clearfix">
		 	    				<div class="mosaic-block circle">
		 	    					<a href="{{ $post_url }}" class="mosaic-overlay link" title="{{ $post_titulo }}"></a><div class="mosaic-backdrop">
		 	    					<img src="{{ $post_imagen }}" alt="{{ $post_titulo }}" /></div>
		 	    				</div>
		 	    				
		 	    				<h3><a href="{{ $post_url }}">{{ $post_titulo }}</a></h3>
		 	    				<p>{{ $post_descripcion }}&#8230;<a href="post.html" class="read-more">Más</a></p>
		 	    			</div>
		 	    		</li>
		 	    		@endforeach
		 	    		
		 	    	</ul>
		 	    </div>
				
				<!-- Start Pagination -->
				<div class="clearfix">
                    {!! $noticias->appends(Request::all())->render() !!}
				</div>
				
			</div>
			
		</div>
	</div>
    	
@stop