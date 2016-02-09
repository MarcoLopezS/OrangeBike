@if(Request::is('/*'))

<div class="tp-banner-container">

	<div class="tp-banner">

		<ul>
			<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Slide">
				<img src="imagenes/peloton.jpg"  alt="slidebg1" data-lazyload="imagenes/peloton.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
			</li>

			<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Slide">
				<img src="imagenes/llegada.jpg"  alt="slidebg1" data-lazyload="imagenes/llegada.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
			</li>

			<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Slide">
				<img src="imagenes/sprinter.jpg"  alt="slidebg1" data-lazyload="imagenes/sprinter.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
			</li>

		</ul>

		<div class="tp-bannertimer"></div>

	</div>

</div>

@else

<div class="slider-interno"></div>

@endif