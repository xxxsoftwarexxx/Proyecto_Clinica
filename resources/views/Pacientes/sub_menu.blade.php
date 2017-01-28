
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_right">
			<div class="login">
				<ul>
					<li><a onclick="Cargar_Datos_Cliente('{{Auth::user()->dni}}')"> Perfil</a></li>
					<li><a href="#book">Reservar cita</a></li>
					<li><a href="">Reportes</a></li>
		<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>




<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">

									<div class="login-right">
										<form role="form" method="get" action="/reservas_Almacenar" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-body">

              <div id="Datos_Reserva">
              <form method="POST" action="/pacientes/{{ $Datos_Paciente->dni }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar pacientes</h2>
            </div></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select onclick="MostrarFormulario()" id="Tipo_pacientes" name="tipo_paciente" placeholder="Tipo pacientes" class="form-control" required>
                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                        <option value="PERSONA EXTERNA" >PERSONA EXTERNA</option>
                      </select>
                  </div>
            </div></br></br>


            <div id='Seccion_Estudiante'>
                <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Codigo" name="codigo" placeholder="Código" class="form-control">
                    </div>
                </div></br></br>

                <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Escuela_Profesional" name="Escuela_Profesional" placeholder="Escuela_Profesional" class="form-control">
                    </div>
                </div></br>
            </div>

            <div id="Seccion_General">
                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="dni" name="dni" placeholder="DNI" class="form-control" required>
                      </div>
                </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                      <div class="col-md-6 col-xs-10">
                          <input id="Password" type="Password" name="contraseña" placeholder="Password" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Nombres" name="nombres" placeholder="Nombres" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Apellidos" name="apellidos" placeholder="Apellidos" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Fecha_Nacimiento" type ="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-control" required>
                      </div>
                </div></br></br>

               <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <select class="form-control" id="Sexo" name="sexo">
                          <option>MASCULINO</option>
                          <option>FEMENINO</option>
                        </select>
                    </div>
              </div></br></br>


              <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Telefono" name="telefono" placeholder="Teléfono" class="form-control" required>
                    </div>
              </div></br></br>

                 <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="E_mail" name="correo" placeholder="E-Mail" class="form-control" required>
                      </div>
                </div></br></br>


                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Direccion" name="direccion" placeholder="Dirección" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <select id="Estado" name="estado" placeholder="Estado" class="form-control">
                              <option>Habilitado</option>
                              <option>Deshabilitado</option>
                          </select>

                      </div>
                </div></br></br>


                <div class="form-group">
                      <div class="col-md-12 text-center">
                          <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                          <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                      </div>
                </div></br></br>
            </div>

            </fieldset>


       </form>

									</div>

								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>


          <!-- Modal -->
  <div class="modal fade"  id="Mo_Datos_Paciente" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Registrar Cita</h4>
        </div>
                        </div>
              
            </div>

            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Confirmar">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
          </form>
      </div>

    </div>
  </div>


<script>
	function Cargar_Datos_Cliente(Usuario)
	{
		$('#myModal4').modal({
                      show: 'true'
                  });
	}
</script>

