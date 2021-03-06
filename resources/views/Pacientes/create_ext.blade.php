@extends('Pacientes.mantenimiento_pacientes')


@section('Contenido')
      <form role="form" method="post" action="/pacientes_ext" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Paciente</h2>
            </div>
              @include('partials/errores')
            </br>


              <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                <div align="center" class="group-control">
                      <select onclick="MostrarFormulario()" id="Tipo_Paciente" name="tipo_paciente"  class="form-control" value="{{old('tipo_paciente')}}" required>
                        <option value="PERSONA EXTERNA" selected>PERSONA EXTERNA</option>
                      </select>
                      <label>Tipo de Paciente</label>
                  </div>
            </div>
         <div>

            <div id="Seccion_General">
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-list-alt bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="dni" name="dni" placeholder="Ejm. 70502321 "  class="form-control" value="{{old('dni')}}" required maxlength="8" size="8">
                          <label>DNI</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                        <input id="Password" name="contraseña" type=Password placeholder="********" value="{{old('contraseña')}}" class="form-control" required autocomplete="new-password">
                        <label>Contraseña</label>
                      </div>
                </div>

                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Nombres" name="nombres" placeholder="Su Nombre" class="form-control" value="{{old('nombres')}}" required>
                            <label>Nombres</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Apellidos" name="apellidos" placeholder="Sus Apellidos" class="form-control" value="{{old('apellidos')}}" required>
                          <label>Apellidos</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Fecha_Nacimiento" name="fecha_nacimiento" type ="date" class="form-control" value="{{old('fecha_nacimiento')}}" required>
                            <label>Fecha de Nacimiento</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-female bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                        <select class="form-control" id="Sexo" name="sexo" value="{{old('sexo')}}">
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
                        <input id="Telefono" name="telefono" placeholder="Ejm. 984572612" title="Solo ingrese numeros." class="form-control" value="{{old('telefono')}}" required maxlength="9" size="9">
                          <label>Teléfono</label>
                    </div>
              </div>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                      <input id="E_mail" name="correo" placeholder="Ejm. maria_22@gmail.com"  class="form-control" value="{{old('correo')}}" required>
                      <label>E-Mail</label>
                    </div>
              </div>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="Direccion" name="direccion" placeholder="Ejm. Av. Universitaria 548" class="form-control" value="{{old('direccion')}}" required>
                          <label>Dirección</label>
                      </div>
                </div>

                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-cog bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <select id="Estado" name="estado" placeholder="Estado" class="form-control" value="{{old('estado')}}">
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
	var Tipo =document

    if(Seleccionado=='ESTUDIANTE')
    {
      document.getElementById('Seccion_Estudiante').style="display:visible";

    }

  }
</script>

@endsection
