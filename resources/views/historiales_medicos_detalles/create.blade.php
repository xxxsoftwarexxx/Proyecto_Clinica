@extends('historiales_medicos_detalles.mantenimiento_historiales_medicos_detalles')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Historiales Médicos Detalles<a1>
@endsection
@section('Contenido')
      <form role="form" method="post" action="/historiales_medicos_detalles" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Historial Médico Detalles</h2>
            </div>
              @include('partials/errores')
            </br>


            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-credit-card bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <select id="Id" name="Id" placeholder="ID"  class="form-control">
                      @foreach($historial_medico as $historial_medico)
                              <option>{{$historial_medico->id_historial_medico}}</option>
                      @endforeach
                    </select>
                    <label>Código de Historial Médico</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-long-arrow-up bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                      <input id="IdCita" name="IdCita" placeholder="Id Cita" class="form-control" required>
                      <label>Id Cita</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-long-arrow-up bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                      <input id="Estatura" name="Estatura" placeholder="Estatura" class="form-control" value="{{old('Estatura')}}" required>
                      <label>Estatura</label>
                  </div>
            </div>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-adjust bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                      <input id="Peso" name="Peso" placeholder="Peso" class="form-control" value="{{old('Peso')}}" required>
                      <label>Peso</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-stethoscope bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                      <input id="Presion" name="Presion" placeholder="Presión" class="form-control" value="{{old('Presion')}}" required>
                        <label>Presion</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-stethoscope bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                      <input id="Descripcion" name="Descripcion" placeholder="Descripcion" class="form-control" value="{{old('Descripcion')}}" required>
                        <label>Descripcion</label>
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
