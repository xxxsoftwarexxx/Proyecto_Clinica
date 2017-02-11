@extends('index')

@section('benners')
<div class="banner page_head"></div>
@endsection
@section('mas')
<div class="map_contact">
	<div class="container">
		<center><azul>Contactanos</azul></center>
		<div class="contact-grids">

			<div class="col-md-6 contact-grid ">
				<form action="#" method="post">
					<input type="text" name="Nombre" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea name="Mensaje" value="Mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" required="">Mensaje...</textarea>
					<input type="submit" value="Enviar" >
				</form>
			</div>
			<div class="col-md-6 contact-left-map ">
				<p>Para cualquier consulta o ayuda, escribenos un mensaje a nuestro correo.Recuerda que estamos para servirte</p>
				<ul class="contact-list">
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Av de la Cultura, Cusco</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a>atencionClinica@unsaac.edu.pe</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(084) 604100</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<center><azul>Sigue el mapa</azul><center>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
		</div>
	</div>
</div>
@endsection
