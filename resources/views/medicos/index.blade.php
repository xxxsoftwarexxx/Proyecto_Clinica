@extends('medicos.mantenimiento_medicos')

@section('estilos')
<script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
<script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection

@section('Contenido')
<div class="dataTable_wrapper table-responsive">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th>DNI</th>
        <th>Código</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Operaciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($medicos as $medico)
      <tr class="odd gradeA" rol="row">
        <td>{{ $medico->dni }}</td>
        <td>{{ $medico->codigo }}</td>
        <td>{{ $medico->nombres }}</td>
        <td>{{ $medico->apellidos }}</td>
        <td>{{ $medico->correo }}</td>
        <td>{{ $medico->telefono }}</td>
        <td align="center">
          <button type="button" class="btn btn-success btn-md"
          onClick="location.href='/medicos/{{ $medico->dni }}/edit'">EDITAR</button>
          @if($medico->estado == "INHABILITADO")
              <button data-target="#confirmar-{{ $medico->dni}}" data-toggle="modal" class="btn btn-warning btn-sm">HABILITAR</button>
          @else
              <button data-target="#confirmar-{{ $medico->dni}}" data-toggle="modal" class="btn btn-danger btn-sm">INHABILITAR</button>
          @endif
        </td>
      </tr>
      <div class="modal fade modal-slide-in-rigth" aria-hidden="true"
        role="dialog" tabindex="-1" id="confirmar-{{$medico->dni}}">
        <form action="/medicos/{{ $medico->dni }}" method="post">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-Label="Close">
                  <span aria-hidden="true">X</span>
                </button>
                <h3 class="modal-title">Estado del Medico</h3>
              </div>
              <div class="modal-body">
                @if($medico->estado == 'HABILITADO')
                  <p>¿Esta seguro de que desea modificar el estado a INHABILITADO del medico?</p>
                @else
                  <p>¿Esta seguro de que desea modificar el estado a HABILITADO del medico?</p>
                @endif
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                  <button type="submit" class="btn btn-success">Si</button>
              </div>
            </div>
          </div>
          </form>
      </div>
    @endforeach
    </tbody>
  </table>
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
