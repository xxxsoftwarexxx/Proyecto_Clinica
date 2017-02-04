@extends('historial_medico.mantenimiento_historial_medico')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historiales Médicos<a1>
@endsection
@section('Contenido')
      <form role="form" method="post" action="/historial_medico" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Historial Médico</h2>
            </div></br>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-qrcode bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Id" name="Id" placeholder="Código de Historial Médico" class="form-control" required>
                    <label>Código de Historial Médico</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-th-list bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Cirugias" name="Cirugias" placeholder="Cirugías" class="form-control" required>
                    <label>Cirugías</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-th-list bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Alergias" name="Alergias" placeholder="Alergias" class="form-control" required>
                    <label>Alergias</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-th-list bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Antecedentes" name="Antecedentes" placeholder="Antecedentes" class="form-control" required>
                    <label>Antecedentes</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-th-list bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Tipo_Sangre" name="Tipo_Sangre" placeholder="Tipo de Sangre" class="form-control" required>
                    <label>Tipo de Sangre</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                    <select id="Pacientes_DNI" name="Pacientes_DNI" placeholder="DNI Paciente" class="form-control">
                      @foreach($pacientes as $paciente)
                              <option>{{$paciente->dni}}</option>
                      @endforeach
                    </select>
                      <label>Código de Pacientes</label>
             </div>

             <div class="input-group col-md-12 col-xs-12">
                 <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                 <span align="center" class="col-md-6 col-xs-10 has-float-label">
                      <input id="Fecha_Apertura" name="Fecha_Apertura" placeholder="Fecha de Apertura" class="form-control" required>
                        <label>Fecha de Apertura</label>
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
