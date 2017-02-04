@extends('index')

@section('opcion')
@endsection
@section('benners')
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info">
								<h3>Para Adultos,Jovenes y Adolecentes<span> Planificación Familiar </span>Visítanos </h3>
								<p>Contamos con psicologos expertos, que te guiaran en el tema,
								responderan tus dudas y aconsejaran.</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Ver Mas</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info2 text-center">
								<h3>Nuestro Local <span>Visítanos</span></h3>
								<p>Non encontramos en el campus de la universidad,
								nacional de San Antonio Abad del Cuso.
								Av de la Cultura</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Ver</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info">
							<h3>Para Adultos,Jovenes y Adolecentes<span> Planificación Familiar </span>Visítanos </h3>
							<p>Contamos con psicologos expertos, que te guiaran en el tema,
							responderan tus dudas y aconsejaran.</p>
							<a href="#book" class="hvr-outline-out button2 scroll">Ver Mas</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info2 text-center">
							<h3>Nuestro Local <span>Visítanos</span></h3>
							<p>Non encontramos en el campus de la universidad,
							nacional de San Antonio Abad del Cuso.
							 Av de la Cultura</p>
							<a href="#book" class="hvr-outline-out button2 scroll">Ver</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
@endsection
@section('mas')
@endsection
@section('info')
		<div class="col-md-4 content_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<img class="img-responsive" src="images/pic1.jpg" alt=" " />
		</div>
		<div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
			<div class="welcome">
				<h3>Bienevnido a la clinica UNSAAC</h3>
				<ul>
				<h5>Ofresemos atencion de alta calidad a
				estudiantes universitarios como a personas
				externas; contamos con personal altamente
				calificado</h5>
				</ul>
			</div>
		</div>
		@if(!Auth::guest())
		@if(Auth::user()->tipo=='Paciente'||Auth::user()->tipo=='Admi')
		<div name="book" id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
			<h3>Reservar una cita</h3>
			<form method="post" action="/reservas/horario">
				  <input type="hidden" name="_token" value="{{csrf_token()}}">
				<select id="Especialidad" name="Especialidad" placeholder="Especialidad"  class="frm-field required sect">
									<option value="null">Seleccionar Especialedad</option>
					@foreach($especialidades as $especialidad)
									<option value="{{$especialidad->codigo}} " name ="Especialidad">{{$especialidad->nombre}}</option>
					@endforeach
				</select>
				<input type="submit" value="Reserver">
			</form>
		</div>
		@endif
		@endif
		<div class="clearfix"></div>
@endsection
<!-- //content -->
<!-- services -->
@section('servicios')
	<div class="container">
		<div class="col-md-4 services_left wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
			<h3>Our Best Services</h3>
			<p class="ser-para" >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
				sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
			<a href="about.html" class="hvr-outline-out button2">See More About Us</a>
			<div  class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="ser-bottom">
							<h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							sed quia consequuntur magni dolores eos qui </h5>
							<p>- Alia Smith</p>
						</div>
					</li>
					<li>
						<div class="ser-bottom">
							<h5>Voluptas sit aspernatur aut odit aut fugit,sed quia consequuntur magni dolores
							eos qui ratione voluptatem sequi nesciunt</h5>
							<p>- Thompson</p>
						</div>
					</li>
					<li>
						<div class="ser-bottom">
							<h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							sed quia consequuntur magni dolores eos qui </h5>
							<p>- Federic</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 services_right ">
			<div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
				<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
@endsection
@section('scripts')
<script>
$("#Cargar_Datos").click(function(event){
			$('#Mo_Datos_Paciente').modal({
			show: 'true'
	});
});
</script>
@endsection
