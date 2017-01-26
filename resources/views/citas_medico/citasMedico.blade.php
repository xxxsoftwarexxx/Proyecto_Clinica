@extends('principal')
@section('estilos')


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
        <div class="dataTable_wrapper table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>

                        <td>dia</td>
                        <td>medicos_dni</td>
                        <td>hora_inicio</td>
                        <td>fecha cita</td>
                        <td>estado</td>
                        <td>paciente_dni</td>
                        <td>id cita</td>
                        <td>sancionar</td>

                    </tr>
                </thead>
                <tbody>

                  @foreach($tablas as $tabla)

                      <tr class="odd gradeA" rol="row">
                          <td>{{$tabla-> dia }}</td>
                          <td>{{$tabla-> medicos_dni }}</td>
                          <td>{{$tabla-> hora_inicio }}</td>
                          <td>{{$tabla-> fecha_cita }}</td>
                          <td>{{$tabla-> estado }}</td>
                          <td>{{$tabla-> pacientes_dni }}</td>
                          <td>{{$tabla-> id }}</td>
                          <td align="center">

                              <a href="/medcitas/{{ $tabla->id }}/sancionar" class="btn btn-success btn-xs">Sancionar</a>

                          </td>

                      </tr>

                  @endforeach



                </tbody>
            </table>
            <td align="center">

                <a href="/medcitas/{{ $tabla->pacientes_dni }}/enlistar" class="btn btn-success btn-xs">Historial</a>

            </td>
        </div>
@endsection

@section('js')
<!-- DataTables JavaScript -->
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
