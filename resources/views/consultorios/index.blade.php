@extends('Consultorios.MantenimientoConsultorios')

@section('estilos')
<script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
<script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Contenido')
<div class="panel-body">
          <div class="dataTable_wrapper">
            <div class="col-md-6">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Ubicacion</th>
            <th>Operaciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach($consultorios as $consultorio)
          <tr class="odd gradeX">
            <td>{{ $consultorio->id }}</td>
            <td>{{ $consultorio->ubicacion }}</td>
            <td align="center" width="25%">
              <button type="button" class="btn btn-success btn-md"
              onClick="location.href='/consultorios/{{ $consultorio->id }}/edit'">EDITAR</button>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
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
