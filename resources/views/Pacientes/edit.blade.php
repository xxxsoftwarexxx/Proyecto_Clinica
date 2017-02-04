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
                        <input id="Codigo" name="codigo" placeholder="Código" class="form-control" value="{{$pacientes->codigo}}">
                        <label>Código de Estudiante</label>
                    </div>
                </div>

              <div class="input-group col-md-12 col-xs-12">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-university bigicon"></i></span>
                    <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                        <select id="Escuela" name="escuelas_profesionales_id" placeholder="Escuela Profesional" class="form-control">
                          @foreach($escuelas_profesionales as $escuela)
                            <option>{{$escuela->id}}</option>
                          @endforeach
                        </select>
                        <label>Código de Escuela Profesional</label>
                    </div>
                </div>
            </div>

            <div id="Seccion_General">
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="dni" name="dni" placeholder="DNI" class="form-control" value="{{$pacientes->dni}}"required>
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
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-female bigicon"></i></span>
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
                        <input id="Telefono" name="telefono" placeholder="Teléfono" class="form-control" value="{{$pacientes->telefono}}" required>
                        <label>Teléfono</label>
                    </div>
              </div>
              <div class="input-group col-md-12 col-xs-12">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
                  <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <div align="center" class="group-control">
                          <input id="E_mail" name="correo" placeholder="E-Mail" class="form-control" value="{{$pacientes->correo}}"required>
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
                              <option>Habilitado</option>
                              <option>Deshabilitado</option>
                          </select>
                          <label>Estado de Paciente</label>
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
