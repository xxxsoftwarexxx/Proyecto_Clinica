@extends('index')
@section('opcion')
@endsection
@section('Menu')
<div class="header wow zoomIn">
		<div class="container">
			<div class="header_right">
				<div class="login">
					<ul>
					<li><a id="Cargar_Datos"> Perfil</a></li>

					<li><a href="#book" id="Reservar_Cita">Reservar cita</a></li>

					<!--<li><a id="No_Reservar_Cita">Reservar cita</a></li>-->

					<li><a href="">Reportes</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection
@section('benners')
@endsection
@section('mas')
<div class="container">
		<div class="panel panel-primary">
      <div class="panel-heading" color=red><blancog>Sobre nosotros</azul></blancog></div>
      <div class="panel-body">
				<div class="row">
					<div class="col-sm-9"> <img class="img-responsive" src="images/meds.jpg" alt=""></div>
					<div class="col-sm-3">
					<negro>Brindamos a nuestros pacientes
						"Atención especializada con trato personalizado y seguro", porque son ellos nuestra prioridad y
						 la razón de ser de la institución. Estamos comprometidos a trabajar en equipo, y a cumplir con
						nuestra responsabilidad social</negro>
					</div>
				</div>
			</div>
			</div>
		</div>

 <div class="container">
		<p class="para_abt wow fadeInUp animated" data-wow-delay=".5s">No hay un medicamento como la esperanza,
			ningún incentivo tan grande,
			 y ningún tónico tan poderoso como la expectativa de que algo ocurra mañana.-Orison Swett Marden.</p>
	</div>
</div>
@endsection
@section('info')
	<div class="testimonials">
		<div class="container">
			<center><azul>Testimonios</azul></center>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="testimonials-grid1">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<p>Alvaro Quiñones</p>
					</div>
					<div class="testimonials-grid2">
						<p>La paciencia y buen servicio hacen la la atencion seas mas eficaz</p>
					</div>
				</div>
				<div class="col-md-6 testimonials-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="testimonials-grid1">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<p>Grecia Usca</p>
					</div>
					<div class="testimonials-grid2">
						<p>Considero que los especialistas son expertos en sus correspondientes areas </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	@endsection
