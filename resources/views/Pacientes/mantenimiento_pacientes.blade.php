@extends('principal')

@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading" style="height:60px;">
          <i class="fa fa-gear fa-fw"></i>
          <a1 class="titulo">Mantenimiento de Pacientes</a1>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="menu_button dropdown-toggle" data-toggle="dropdown">
                        Acciones
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a class="opcion" type="button" href='/pacientes/create'>Agregar paciente</a>
                        </li>
                        <li><a class="opcion" type="button" href='/pacientes'>Editar/Eliminar</a>
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
