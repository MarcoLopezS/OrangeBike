@extends('layouts.frontend')

@section('contenido_body')
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">		
		<div class="wrapper ad-pad clearfix">
			
			<div class="main-content col-4-5 right last">
				<h1>Equipo</h1>
				<p class="lead"></p>

                @foreach($modality as $item)
                {{--*/
                $teams_titulo = $item->titulo;
                $teams_url = $item->slug_url;
                /*--}}
                <hr/>

                <a href="#top" class="btn-3 xsmall-btn right fa"></a>

                <h3 id="{{ $teams_url }}">{{ $teams_titulo }}</h3>
                <div class="clearfix teams">
					
					<!-- Member -->
					<div class="col-1-5 boxy">
						<img src="img/face.jpg" alt="Mock" />
						<div class="inner-box">
							<h6>James Doe</h6>
							<em>Position</em>
						</div>
					</div>
					
				</div>
                @endforeach

				<!-- Finish Main Content -->
			</div>
			
			<!-- Start Main Sidebar  -->
			<aside class="col-1-5">
				<div class="widget">
			    	<h3 class="widget-title">Menu</h3>
			    	<ul class="widget-list  list-1">

                        @foreach($modality as $item)
                        {{--*/
                        $team_titulo = $item->titulo;
                        $team_url = $item->slug_url;
                        /*--}}
			    		<li><a href="#{{ $team_url }}">{{ $team_titulo }}</a></li>
                        @endforeach

			    	</ul>	
			    </div>	
			</aside> 
			<!-- Finish Sidebar -->
			
		</div>
	</div>
    	
@stop