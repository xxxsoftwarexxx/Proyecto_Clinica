@extends('estudiantes.Mantenimiento')

@section('estilos')
      <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
      <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Titulo')
      <i class="fa fa-gear fa-fw"></i>
      <a1>Mantenimiento de estudiantes<a1>
@endsection

@section('Contenido')
      <div class="panel-body">
          <div class="dataTable_wrapper">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                        <th>ID</th>
                        <th>TELEFONO</th>
                        <th>TIPO</th>
                          <th>OPERADOR</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($telefono as $fono)
                      <tr class="odd gradeX">
                          <td>{{ $fono->dni }}</td>
                          <td>{{ $fono->contraseña }}</td>
                          <td>{{ $fono->codigo }}</td>
                          <td>{{ $fono->telefono }}</td>

                          <td align="center">
                            <button type="button" class="btn btn-success btn-xs"
                            onClick="location.href='/estudiantes/{{ $estudiante->dni }}/edit'">
                            Editar</button>
                               <form action="/estudiantes/{{ $estudiante->dni }}" method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE')}}
                                 <button class="btn btn-danger btn-xs">Eliminar</button>
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
