@extends('Especialidades.MantenimientoEspecialidades')

@section('estilos')
      <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
      <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
      <i class="fa fa-gear fa-fw"></i>
      <a1>MANTENIMIENTO DE ESPECIALIDADES<a1>
@endsection

@section('Contenido')
      <div class="panel-body">
          <div class="dataTable_wrapper">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead bgcolor = "‎#CCFFFF">
                      <tr>
                          <th align="center">Código</th>
                          <th align="center">Nombre</th>
                          <th align="center">ID del Consultorio</th>
                          <th align="center">Operaciones</th>

                      </tr>
                  </thead>
                  <tbody>
                    @foreach($especialidades as $especialidad)
                      <tr class="odd gradeX">
                          <td>{{ $especialidad->codigo}}</td>
                          <td>{{ $especialidad->nombre}}</td>
                          <td>{{ $especialidad->consultorios_id}}</td>
                          <td align="center" width = "25%">
                            <form action="/especialidades/{{ $especialidad->codigo}}" method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('PUT')}}
                            <button type="button" class="btn btn-success btn-sm"
                            onClick="location.href='/especialidades/{{ $especialidad->codigo }}/edit'">
                            EDITAR</button>
                            @if ($especialidad->habilitado == 0)
                              <button class="btn btn-warning btn-sm">HABILITAR</button>
                            @else
                              <button class="btn btn-danger btn-sm">INHABILITAR</button>
                            @endif
                            </form>
                           </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div
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
