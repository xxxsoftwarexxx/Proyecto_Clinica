@extends('historiales_medicos_detalles.mantenimiento_historiales_medicos_detalles')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historiales Médicos Detalles<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/historiales_medicos_detalles/{{$historiales_medicos_detalles->id_cita}}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Historial Médico Detalles</h2>
            </div></br>


            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-qrcode bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Id" name="Id"  class="form-control"  value="{{$historiales_medicos_detalles->id_historial_medico}}" required readonly="">
                      <label>Id Historial Medico</label>
                  </div>
           </div>
           <div class="input-group col-md-12 col-xs-12">
               <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
               <span align="center" class="col-md-6 col-xs-10 has-float-label">
                 <div align="center" class="group-control">
                         <input id="IdCita" name="IdCita" class="form-control" readonly value="{{$historiales_medicos_detalles->id_cita}}" required>
                         <label>Id Cita</label>
                 </div>

           </div>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-long-arrow-up bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Estatura" name="Estatura" placeholder="Estatura" class="form-control"  value="{{$historiales_medicos_detalles->estatura}}" required>
                      <label>Estatura</label>
                  </div>
           </div>


               <div class="input-group col-md-12 col-xs-12">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-adjust bigicon"></i></span>
                      <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                   <input id="Peso" name="Peso" placeholder="Peso" class="form-control" value="{{$historiales_medicos_detalles->peso}}" required>
                    <label>Peso</label>
                 </div>
          </div>
          <div class="input-group col-md-12 col-xs-12">
              <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-stethoscope bigicon"></i></span>
              <span align="center" class="col-md-6 col-xs-10 has-float-label">
                <div align="center" class="group-control">
                        <input id="Presion" name="Presion" placeholder="Presión" class="form-control" value="{{$historiales_medicos_detalles->presion}}" required>
                        <label>Presión</label>
                  </div>
          </div>


          <div class="input-group col-md-12 col-xs-12">
              <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
              <span align="center" class="col-md-6 col-xs-10 has-float-label">
                <div align="center" class="group-control">
                        <input id="Descripcion" name="Descripcion" class="form-control" value="{{$historiales_medicos_detalles->descripcion}}" required>
                        <label>Descripcion </label>
                  </div>
          </div>


            <div class="form-group">
                  <div class="col-md-12 text-center">
                      <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                      <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                  </div>
            </div></br></br>

            </fieldset>


       </form>
@endsection
