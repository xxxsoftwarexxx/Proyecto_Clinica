@extends('historial_medico.mantenimiento_historial_medico')

@section('estilos')

<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection



@section('Contenido')
        <div class="dataTable_wrapper table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Código de Historial Médico</th>
                                            <th>DNI Pacientes</th>
                                            <th>Cirugias</th>
                                            <th>Alergias</th>
                                            <th>Antecedentes</th>
                                            <th>Tipo Sangre</th>
                                            <th>Fecha Apertura</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($historial_medico as $historial_medico)

                                        <tr class="odd gradeA" rol="row">
                                            <td>{{ $historial_medico-> id_historial_medico }}</td>
                                            <td>{{ $historial_medico-> pacientes_dni }}</td>
                                            <td>{{ $historial_medico-> cirugias}}</td>
                                            <td>{{ $historial_medico-> alergias }}</td>
                                            <td>{{ $historial_medico-> antecedentes }}</td>
                                            <td>{{ $historial_medico-> tipo_sangre }}</td>
                                            <td>{{ $historial_medico-> fecha_apertura }}</td>

                                            <td align="center">
                                                <button type="button" style="height:30px" class="btn btn-info btn-xs"
                                                onClick="location.href='/historial_medico/{{ $historial_medico->id_historial_medico }}'">
                                                Ver Detalles</button>
                                                <button type="button" style="height:30px" class="btn btn-success btn-xs"
                                                onClick="location.href='/historial_medico/{{ $historial_medico->id_historial_medico }}/edit'">
                                                Editar</button>

                                            </td>
                                        </tr>

                                    @endforeach



                                    </tbody>
                                </table>
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
