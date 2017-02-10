@extends('Citas_heredar')
@section('estilos')
<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@section('estilos')

<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Citas Médicos<a1>
@endsection
@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">

              <i class="fa fa-gear fa-fw"></i>
              <a1>Citas del Dia que fueron Atendidas <a1>
        </div>
        <div class="panel-body">
          <div >
                @yield('Contenido')
                <div class="text-center"><h2 align="center">Citas Atendias</h2>
            </div></br>
                <div class="clearfix"></div>
                <div class="dataTable_wrapper table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <td>Hora Inicio</td>
                        <td>DNI Paciente</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Tipo</td>
                        <td>Sancionar</td>
                        <td>Historial</td>
                        <td>Continuar</td>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($tablas as $tabla)
                      <tr class="odd gradeA" rol="row">
                          <td>{{$tabla-> hora_inicio }}</td>
                          <td>{{$tabla-> dni }}</td>
                          <td>{{$tabla-> nombres }}</td>
                          <td>{{$tabla-> apellidos }}</td>
                          <td>{{$tabla-> tipo_paciente }}</td>
                            <td align="center">
                              <a href="" class="btn btn-warning btn-xs" disabled="true">Sancionar</a>
                            </td>
                            <td align="center">
                              <a href="/medcitas/{{ $tabla->dni }}/historial" class="btn btn-warning btn-xs">Historial</a>
                            </td>
                            <td align="center">
                              <a href="" class="btn btn-warning btn-xs" disabled="true">Siguiente</a>
                            </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection

@section('js')
    <script src={{ URL::asset('bower_components/DataTables/media/js/jquery.dataTables.min.js') }}></script>
    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}></script>
@endsection
@section('js_scripts')
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
@endsection
