@extends('principal')

@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading" style="height:60px;">
              @yield('Titulo')
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="menu_button dropdown-toggle" data-toggle="dropdown">
                        Acciones
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a type="button" href='/historiales_medicos_detalles/create'>Agregar Historial Médico Detalles</a>
                        </li>
                        <li><a type="button" href='/historiales_medicos_detalles'>Editar/Eliminar</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div >
                @yield('Contenido')
            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
@endsection

@section('js')
  @yield('js')
@endsection

@section('js_scripts')
  @yield('js_scripts')
@endsection
