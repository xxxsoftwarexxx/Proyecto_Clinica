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

@if(!Auth::guest())
	@if(Auth::user()->tipo=='Paciente')

<div class="modal fade" id="Mo_Datos_Paciente" tabindex="-1" role="dialog" style="top:-70px">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login-right">
						<div class="modal-body">
						    <form method="POST" action="/pacientes/{{ $Datos_Paciente->dni }}" autocomplete="off">
						          {{csrf_field()}}
						          {{method_field('PUT')}}

						        <fieldset>

						        <div class="text-center"><h2 align="center">Editar datos personales</h2></div></br>


						            <div id="Seccion_General" class="row">
						                <div class="form-group">
						                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
						                      <div class="col-md-7 col-xs-10">
						                          <input id="dni" name="dni" placeholder="DNI" class="form-control" required value="{{$Datos_Paciente->dni}}" readonly="readonly">
						                      </div>
						                </div></br></br>


						                <div class="form-group">
						                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

						                      <div class="col-md-7 col-xs-10">
						                          <input id="Nombres" name="nombres" placeholder="Nombres" class="form-control" required value="{{$Datos_Paciente->nombres}}" readonly="readonly">
						                      </div>
						                </div></br></br>

						                <div class="form-group">
						                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
						                      <div class="col-md-7 col-xs-10">
						                          <input id="Apellidos" name="apellidos" placeholder="Apellidos" class="form-control" required value="{{$Datos_Paciente->apellidos}}" readonly="readonly">
						                      </div>
						                </div></br></br>

						                <div class="form-group">
						                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>

						                      <div class="col-md-7 col-xs-10">
						                          <input id="Fecha_Nacimiento" type ="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-control" required value="{{$Datos_Paciente->fecha_nacimiento}}" readonly="readonly">
						                      </div>
						                </div></br></br>

						               <div class="form-group">
						                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

						                    <div class="col-md-7 col-xs-10">
						                        <select class="form-control" id="Sexo" name="sexo" >
						                          <option>MASCULINO</option>
						                          <option>FEMENINO</option>
						                        </select>
						                    </div>
						              </div></br></br>


						              <div class="form-group">
						                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>

						                    <div class="col-md-7 col-xs-10">
						                        <input id="Telefono" name="telefono" placeholder="Teléfono" class="form-control" required value="{{$Datos_Paciente->telefono}}">
						                    </div>
						              </div></br></br>

						                 <div class="form-group">
						                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

						                      <div class="col-md-7 col-xs-10">
						                          <input id="E_mail" name="correo" placeholder="E-Mail" class="form-control" required value="{{$Datos_Paciente->correo}}">
						                      </div>
						                </div></br></br>


						                <div class="form-group">
						                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

						                      <div class="col-md-7 col-xs-10">
						                          <input id="Direccion" name="direccion" placeholder="Dirección" class="form-control" required value="{{$Datos_Paciente->direccion}}">
						                      </div>
						                </div></br></br>

						                <div class="form-group">
						                      <div class="ccol-md-12 text-center">
						                          <input id="btn_Modificar_Datos_Paciente" type="button" style="width:200px" class="btn btn-primary" align="center" class="form-control" value="Guardar Cambios">
						                      </div>
						                </div>
						            </div>

						            </fieldset>
						       </form>

							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endif


@if(!Auth::guest())
@if(Auth::user()->tipo=='Paciente')

<div class="modal fade" id="Mo_Especialidades" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login-right">
						<div class="modal-body" align="center">


								<h3 align="center" >Reservar una cita</h3>

								<select id="Especialidad_Cita" name="Especialidad_Cita" placeholder="Especialidad"  class="form-control frm-field required sect">

									@foreach($especialidades as $especialidad)
										<option value="{{$especialidad->codigo}} " name ="Especialidad">{{$especialidad->nombre}}</option>
									@endforeach
								</select></br>

								<button id="btn_Mostrar_Horario" style="width:350px"  type="button" class="btn btn-primary">Siguiente</button>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endif


@if(!Auth::guest())
@if(Auth::user()->tipo=='Paciente')
<div class="modal fade" id="Mo_Horario" role="dialog" >
	<div class="modal-dialog">
		<div style="width: 1250px;left: -70%;" class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="modal-body" id="Mo_Body_Horario">


				</div>
			</div>
		</div>
	</div>
</div>

                           <!-- Modal -->
<div class="modal fade" id="Mo_Registrar_Cita" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title" align="center">Registrar Cita</h4>
    </div>
      <form role="form" method="get" action="/reservas_Almacenar" autocomplete="off">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-body">

          <div id="Datos_Reserva">

          </div>
          <input name="Id_Paciente" id="Id_Paciente" type="hidden" value="{{Auth::user()->dni}}">
        </div>

        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Confirmar">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
  </div>

</div>
</div>
@endif

<style>
.Hora_Cita_Libre:hover{
	background-color: blue;
	text-align: center;
	cursor: pointer;
}

.Hora_Cita_Ocupado:hover{
	background-color: red;
	text-align: center;
	cursor:not-allowed;
}

</style>
@endif

@section('scripts')
<script>
$("#Cargar_Datos").click(function(event){
			$('#Mo_Datos_Paciente').modal({
			show: 'true'
	});
});
$("#Reservar_Cita").click(function(event){
      $('#Mo_Especialidades').modal({
      show: 'true'
  });
});
</script>
<script>
$(document).ready(function() {

$("#btn_Mostrar_Horario").click(function(event){

var Especialidad = $('#Especialidad_Cita').val();

$.get('Recuperar_Horario',{Especialidad:Especialidad},function(data){

					var dias = data[0];
					var fecha = data[1];
					var estado = data[2];
					var res = data[3];


		var Tabla = $('#Mo_Body_Horario');
		Tabla.empty();
			Tabla.append(
				'<div class="dataTable_wrapper table-responsive">'+
                                  '<table class="table table-bordered table-condensed">'+
                                    '<thead>'+
                                        '<tr>'+
                                        '</tr>'+
                                    '</thead>'+
                                   '</table>');

Tabla.append('<th><div style="width:100px;height:85px;background-color:#2FAED5;"class="panel-heading"><h3>Hora</h3></div></th>');
            for(var i=0;i<7;i++)
            {

            Tabla.append(
			  '<th>'+

                    '<div align="center" style="width:150px;height:85px;background-color:#2FAED5;" class="panel-heading">'+
                        '<h3>'+dias[i]+'</h3>'+
                        fecha[i] +
                  '</div>'+

              '</th>');
			}

			Tabla_Body = $('<tbody style="background-color:#A6CEE0"></tbody>');


			for(var i=7;i<19;i++)
            {
            	if((i<13)||(i>=15))
            	{
					Tabla_Body.append(
						'<tr>'+
                            '<td align ="right" style="background-color:#be25b5">');
                            	if(i<9)
                            	{
                            		Tabla_Body.append('0'+i+':00 - 0'+(i+1)+':00');
                            	}
                            	if(i==9)
                            	{
                            		Tabla_Body.append('0'+i+':00 - '+(i+1)+':00');
                            	}
                            	if(i>9)
                            	{
                            		Tabla_Body.append(i+':00 - '+(i+1)+':00');
                            	}
                            Tabla_Body.append('</td>');

                            for(var j=0;j<7;j++)
                            {

								if(res[j+'-'+i]['estado']==1)
								{
									Tabla_Body.append('<td align="center" class="Hora_Cita_Ocupado" id="'+j+'-'+i+'" value="'+res[j+'-'+i]["idbloques"]+'">Reservado</td>');

								}
								else
								{
									Tabla_Body.append('<td align="center" class="Hora_Cita_Libre" id="'+j+'-'+i+'" value="'+res[j+'-'+i]['idbloques']+'">Disponible</td>');
								}

                            }
            	}
            	else if(i==13)
            	{
					Tabla_Body.append('<td colspan="8" height="25px"></td>');
            	}
			Tabla_Body.append('</tr>');
            }
            Tabla.append(Tabla_Body);

             $(".Hora_Cita_Libre").click(function(event){

                   event.preventDefault();
                   var Id = $("#"+event.target.id).attr('value');
                   var idtd = $("#"+event.target.id).attr('id');


                    var td = $('.fc-resource'+idtd);
                    var head = td.parent().parent().parent().find("thead");
                    var th = head.find("th:eq("+td.index()+")");

                    var Nro_Dia = idtd.substring(0,1);

                   $.get('/Recuperar_Datos_Cita',{Id:Id},function(data){

                      $('#Datos_Reserva').empty();
                      var info = $('#Datos_Reserva');
                      var th = td.closest('table').find('th').eq(td.index());
                      //alert(th.val());
                      info.append('<p>Médico:'+data[2]+'</p><p>Día:'+data[1]+'</p>');

                      			if(data[0]<9)
                            	{
                            		info.append('<p>Hora:0'+data[0]+':00');
                            	}
                            	if(data[0]==9)
                            	{
                            		info.append('<p>Hora:0'+data[0]+':00');
                            	}
                            	if(data[0]>9)
                            	{
                            		info.append('<p>Hora:'+data[0]+':00');
                            	}
                      	info.append('</p><p>Consultorio:'+data[4]+'</p><p>Especialidad:'+data[3]+'</p><input name="Id" type="hidden" id="Id" value="'+Id+'"><input name="Nro_Dia" type="hidden" id="Nro_Dia" value="'+Nro_Dia+'">');

                      $('#Mo_Registrar_Cita').modal({
                      show: 'true'
                  });
                  });
        });

		});


      $('#Mo_Horario').modal({
      show: 'true'
  		});
	});
});
</script>
<script>
 $("#No_Reservar_Cita").click(function(event){
 	alert('No puede recervar una cita');
});
</script>
<script>
$("#btn_Modificar_Datos_Paciente").click(function(event){
	var dni = $('#dni').val();
	var sexo = $('#Sexo').val();
	var telefono = $('#Telefono').val();
	var correo = $('#E_mail').val();
	var direccion = $('#Direccion').val();

	 $.get('/Modificar_Datos_Paciente',{dni:dni,sexo:sexo,telefono:telefono,correo:correo,direccion:direccion},function(data){
	 	alert(Actualizado correctamente);
	 });
});
</script>

@endsection
