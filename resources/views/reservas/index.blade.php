@extends('medicos.mantenimiento_medicos')

@section('estilos')

<!-- DataTables CSS -->

    <script src={{ URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}></script>
    <!-- DataTables Responsive CSS -->

    <script src={{ URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}></script>
@endsection
<
@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Eligir Fecha y Hora<a1>
@endsection

@section('Contenido')
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
    function cambiacolor_texto(cell,otro,id){
      cell.style.backgroundColor = (cell.style.backgroundColor=="red" ? "white":"red");
      var str = cell.id;
      var res = parseInt(str.split("-")[1]);
      document.getElementById("dia").value=res+":00 - "+(res+1)+":00";
      document.getElementById("fecha").value=otro ;
      document.getElementById("id").value=id ;
    }


</script>

@endsection
