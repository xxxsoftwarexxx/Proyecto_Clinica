@extends('Pacientes.mantenimiento_pacientes')


@section('Contenido')
      <form role="form" method="post" action="/pacientes" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Paciente</h2>
            </div></br>


              <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                <div align="center" class="group-control">
                      <select onclick="MostrarFormulario()" id="Tipo_Paciente" name="tipo_paciente"  class="form-control" required>
                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                        <option value="PERSONA EXTERNA" selected>PERSONA EXTERNA</option>
                      </select>
                      <label>Tipo de Paciente</label>
                  </div>
            </div>
         <div>
            <div id='Seccion_Estudiante' style="display:none">
              <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                <div align="center" class="group-control">
                    <input id="Codigo" name="codigo" placeholder="Ejm. 137280" class="form-control" pattern="[0-9]{6}" required maxlength="6" size="6">
                    <label>Código de Estudiante</label>
                  </div></br>
            </div>

            <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-university bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                        <select id="Escuela" name="escuelas_profesionales_id" class="form-control">
                          @foreach($escuelas_profesionales as $escuela)
                            <option value={{$escuela->id}} >{{$escuela->nombre}}</option>
                          @endforeach
                        </select>
                  <label>Escuela Profesional</label>
                    </div>
                </div></div>
            </div>

            <div id="Seccion_General">
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="dni" name="dni" placeholder="Ejm. 70502321 " pattern="[0-9]{8}" class="form-control" required maxlength="8" size="8">
                          <label>DNI</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                        <input id="Password" name="contraseña" type=Password placeholder="********" class="form-control" required autocomplete="new-password">
                        <label>Contraseña</label>
                      </div>
                </div>

                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Nombres" name="nombres" placeholder="Ejm. Raisa" class="form-control" required>
                            <label>Nombres</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Apellidos" name="apellidos" placeholder="Ejm. Sanchez Farfan" class="form-control" required>
                          <label>Apellidos</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Fecha_Nacimiento" name="fecha_nacimiento" type ="date" class="form-control" required>
                            <label>Fecha de Nacimiento</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-female bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                        <select class="form-control" id="Sexo" name="sexo">
                          <option>MASCULINO</option>
                          <option>FEMENINO</option>
                        </select>
                        <label>Sexo</label>
                    </div>
              </div>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                        <input id="Telefono" name="telefono" placeholder="Ejm. 984572612" title="Solo ingrese numeros."pattern="[0-9]{9}" class="form-control" required maxlength="9" size="9">
                          <label>Teléfono</label>
                    </div>
              </div>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                      <input id="E_mail" name="correo" placeholder="Ejm. maria_22@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required>
                      <label>E-Mail</label>
                    </div>
              </div>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="Direccion" name="direccion" placeholder="Ejm. Av. Universitaria 548" class="form-control" required>
                          <label>Dirección</label>
                      </div>
                </div>

                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-cog bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <select id="Estado" name="estado" placeholder="Estado" class="form-control">
                              <option>HABILITADO</option>
                              <option>INHABILITADO</option>
                          </select>
                          <label>Estado del Paciente</label>

                      </div>
                </div></br></br>


                <div class="form-group">
                      <div class="col-md-12 text-center">
                          <a data-target="#confirmar" data-toggle="modal" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">Guardar</a>
                          <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                      </div>
                </div></br></br>

                <div class="modal fade modal-slide-in-rigth" aria-hidden="true"
                  role="dialog" tabindex="-1" id="confirmar">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-Label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                          <h3 class="modal-title">Agregar Paciente</h3>
                        </div>
                        <div class="modal-body">
                          <p>Esta seguro si desea agregar los datos del paciente ?</p>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" style="width:80px" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </div>
                </div>


            </div>
            </fieldset>


       </form>
@endsection
@section('js_scripts')
<script>
  function MostrarFormulario()
  {
    var Seleccionado = document.getElementById('Tipo_Paciente').value;

    if(Seleccionado=='ESTUDIANTE')
    {
      document.getElementById('Seccion_Estudiante').style="display:visible";

    }
    else
    {
      document.getElementById('Seccion_Estudiante').style="display:none";
    }
  }
</script>

@endsection
