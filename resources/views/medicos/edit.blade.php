@extends('medicos.mantenimiento_medicos')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Médicos<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/medicos/{{ $medicos->dni }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Médico</h2>
            </div></br>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="dni" name="id" placeholder="DNI" class="form-control" value="{{$medicos->dni}}"  required>
                    <label>DNI</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Password" name="contraseña" placeholder="Contraseña" class="form-control" value="{{$medicos->contraseña}}" required>
                    <label>Contraseña</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user-md bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Codigo" name="codigo" placeholder="Código Médico" class="form-control" value="{{$medicos->codigo}}" required>
                    <label>Código Médico</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Nombres" name="nombres" placeholder="Nombres" class="form-control" value="{{$medicos->nombres}}" required>
                    <label>Nombres</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Apellidos" name="apellidos" placeholder="Apellidos" class="form-control" value="{{$medicos->apellidos}}" required>
                    <label>Apellidos</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Fecha_Nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-control" value="{{$medicos->fecha_nacimiento}}" required>
                    <label>Fecha de Nacimiento</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-female bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Sexo" name="sexo" placeholder="Sexo" class="form-control" value="{{$medicos->sexo}}" required>
                    <label>Sexo</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Telefono" name="telefono" placeholder="Teléfono" class="form-control" value="{{$medicos->telefono}}" required>
                    <label>Teléfono</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="E_mail" name="correo" placeholder="E-Mail" class="form-control" value="{{$medicos->correo}}" required>
                    <label>E-Mail</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Dirección" name="direccion" placeholder="Dirección" class="form-control" value="{{$medicos->direccion}}" required>
                    <label>Dirección</label>
                  </div>
            </div>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-bitbucket bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <select id="Estado" name="estado" placeholder="Estado" class="form-control">
                        @if($medicos->estado=="1")
                          <option selected >Habilitado</option>
                          <option >Deshabilitado</option>
                        @else
                          <option >Habilitado</option>
                          <option selected >Deshabilitado</option>
                        @endif
                      </select>
                      <label>Estado<label>


                  </div>
            </div>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-heartbeat bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <select id="Especialidad" name="especialidades_codigo" placeholder="Especialidad" class="form-control">
                        @foreach($especialidades as $especialidad)
                            @if($especialidad->codigo==$medicos->especialidades_codigo)
                                <option selected value="{{$especialidad->codigo}}">{{$especialidad->nombre}}</option>

                            @else
                                <option value="{{$especialidad->codigo}}">{{$especialidad->nombre}}</option>
                            @endif
                        @endforeach
                      </select>
                      <label>Especialidad<label>

                  </div>
            </div></br></br>



            <div class="form-group">
                  <div class="col-md-12 text-center">
                      <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                      <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                  </div>
            </div></br></br>

            </fieldset>


       </form>
@endsection
