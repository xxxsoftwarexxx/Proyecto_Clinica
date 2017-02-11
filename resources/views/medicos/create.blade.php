@extends('medicos.mantenimiento_medicos')

@section('estilos')
  <style>
    #Nombres{
      text-transform: uppercase;
    }
    #Apellidos{
      text-transform: uppercase;
    }
    #Dirección{
      text-transform: uppercase;
    }
  </style>
@endsection

@section('Contenido')
<form role="form" method="post" action="/medicos" autocomplete="off">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <fieldset>
    <div class="text-center"><h2 align="center">NUEVO MÉDICO</h2>
    </div></br>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="dni" name="dni" pattern="[0-9]{8}" placeholder="Ejm. 12345678" class="form-control" required>
        <label>DNI</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="Password" type="password" name="contraseña" placeholder="*********" class="form-control" required>
        <label>Contraseña</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user-md bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="Codigo" name="codigo" pattern="[A-Z0-9]{6}" placeholder="Ejm. ME0034" class="form-control" required>
        <label>Código Médico</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="Nombres" name="nombres" pattern="[a-zA-Z ]{0,}"placeholder="Ejm. Luis" class="form-control" required>
        <label>Nombres</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="Apellidos" name="apellidos" pattern="[a-zA-Z ]{0,}" placeholder="Ejm. Castro Fuentes" class="form-control" required>
        <label>Apellidos</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="Fecha_Nacimiento" name="fecha_nacimiento" type ="date"  class="form-control" required>
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
        <input id="Telefono" name="telefono" pattern="9.[0-9]{6,9}"placeholder="Ejm. 934231232" class="form-control" required>
        <label>Teléfono</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="E_mail" name="correo" type="email" placeholder="Ejm. lucho_cf@gmail.com" class="form-control" required>
        <label>E-Mail</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="Dirección" name="direccion" placeholder="Ejm. Jr. Pachacutec 456" class="form-control" required>
        <label>Dirección</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-bitbucket bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <select id="Estado" name="estado"  class="form-control" >
          <option>HABILITADO</option>
          <option>INHABILITADO</option>
        </select>
        <label>Estado</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-heartbeat bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <select id="Especialidad" name="especialidades_codigo"  class="form-control">
        @foreach($especialidades as $especialidad)
          <option value="{{$especialidad->codigo}}">{{$especialidad->nombre}}</option>
        @endforeach
        </select>
        <label>Epecialidad</label>
      </div>
    </div></br></br>

    <div class="form-group">
      <div class="col-md-12 text-center">
        <a data-target="#confirmar" data-toggle="modal" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">Guardar</a>
        <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>
      </div>
    </div></br></br>

    <div class="modal fade modal-slide-in-rigth" aria-hidden="true" role="dialog" tabindex="-1" id="confirmar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-Label="Close">
              <span aria-hidden="true">X</span>
            </button>
            <h3 class="modal-title">Agregar Médico</h3>
          </div>
          <div class="modal-body">
            <p>¿Desea agregar a este médico?</p>
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
