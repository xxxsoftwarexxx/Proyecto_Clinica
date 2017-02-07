@extends('pacientes.mantenimiento_pacientes')


@section('Contenido')
        <form method="POST" action="/pacientes/{{ $pacientes->dni }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar pacientes</h2>
            </div></br>

            <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                      <select onclick="MostrarFormulario()" id="Tipo_pacientes" name="tipo_paciente" placeholder="Tipo pacientes" class="form-control" required>
                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                        <option value="PERSONA EXTERNA" >PERSONA EXTERNA</option>
                      </select>
                        <label>Tipo de Paciente</label>
                  </div>
            </div>


            <div id='Seccion_Estudiante'>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                        <input id="Codigo" name="codigo" placeholder="Código" class="form-control"  maxlength="6"value="{{$pacientes->codigo}}">
                        <label>Código de Estudiante</label>
                    </div>
                </div>

              <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-university bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                      <select id="Escuela" name="escuelas_profesionales_id" class="form-control">
                        @foreach($escuelas_profesionales as $escuela)
                          @if($escuela->id == $pacientes->escuelas_profesionales_id )
                              <option selected value={{$escuela->id}} >{{$escuela->nombre}}</option>
                          @else
                              <option value={{$escuela->id}} >{{$escuela->nombre}}</option>
                          @endif
                        @endforeach
                      </select>
                      <label>Escuela Profesional<label>
                    </div>
                </div>
            </div>

            <div id="Seccion_General">
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="dni" name="dni" placeholder="DNI" class="form-control" value="{{$pacientes->dni}}"required maxlength="8" size="8">
                            <label>DNI</label>
                      </div>
                </div>
                </div>

                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Password" type="Password" name="contraseña" placeholder="Contraseña" class="form-control" value="{!!$pacientes->contraseña!!}" required>
                          <label>Contraseña</label>
                      </div>
                </div>

                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Nombres" name="nombres" placeholder="Nombres" class="form-control" value="{{$pacientes->nombres}}" required>
                          <label>Nombres</label>
                      </div>
                </div>

                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Apellidos" name="apellidos" placeholder="Apellidos" class="form-control" value="{{$pacientes->apellidos}}"required>
                          <label>Apellidos</label>
                      </div>
                </div>

                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Fecha_Nacimiento" type ="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-control" value="{{$pacientes->fecha_nacimiento}}" required >
                          <label>Fecha de Nacimiento</label>
                      </div>
                </div>

                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-male bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                        <select class="form-control" id="Sexo" name="sexo" value="{{$pacientes->sexo}}" required>
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
                        <input id="Telefono" name="telefono"  placeholder="Teléfono" class="form-control" value="{{$pacientes->telefono}}" maxlength="9" size="9" required>
                        <label>Teléfono</label>
                    </div>
              </div>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="E_mail" name="correo"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="E-Mail" class="form-control" value="{{$pacientes->correo}}"required>
                          <label>E-Mail</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <input id="Direccion" name="direccion" placeholder="Dirección" class="form-control" value="{{$pacientes->direccion}}"required>
                          <label>Dirección</label>
                      </div>
                </div>
                <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-cog bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <div align="center" class="group-control">
                          <select id="Estado" name="estado" placeholder="Estado" class="form-control" value="{{$pacientes->estado}}">

                            @if($pacientes->estado == 'HABILITADO')
                              <option selected value="HABILITADO" >HABILITADO</option>
                              <option value="INHABILITADO">INHABILITADO</option>
                            @else
                              <option selected value="INHABILITADO" >INHABILITADO</option>
                              <option  value="HABILITADO" >HABILITADO</option>
                            @endif
                          </select>
                          <label>Estado de Paciente</label>
                      </div>
                </div></br></br>


                <div class="form-group">
                      <div class="col-md-12 text-center">
                          <a data-target="#confirmar-{{ $pacientes->dni }}" data-toggle="modal" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">Guardar</a>
                          <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                      </div>

                </div></br></br>
            </div>


            <div class="modal fade modal-slide-in-rigth" aria-hidden="true"
              role="dialog" tabindex="-1" id="confirmar-{{$pacientes->dni}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-Label="Close">
                        <span aria-hidden="true">X</span>
                      </button>
                      <h3 class="modal-title">Modificar Paciente</h3>
                    </div>
                    <div class="modal-body">
                      <p>Esta seguro si desea modificar los datos del paciente ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="submit" style="width:80px" class="btn btn-success">Guardar</button>
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
    var Seleccionado = document.getElementById('Tipo_pacientes').value;


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
